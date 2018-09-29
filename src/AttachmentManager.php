<?php
namespace eduluz1976\task;


define('ATTACH_ERROR','_error_');
define('ATTACH_OK','_ok_');

/**
 * Trait AttachmentManager
 * @package eduluz1976\task
 * @author Eduardo Luz <eduluz1976@gmail.com>
 * @link https://github.com/eduluz1976/task
 */
trait AttachmentManager {

    /**
     * @var Attachment[]
     */
    protected $lsAttachments=[];


    /**
     * @param Task $task
     * @return $this
     */
    public function addErrorAttachment(Task $task) {
        $this->lsAttachments[ATTACH_ERROR] = $task;
        return $this;
    }


    /**
     * Add a new Attachment to this Task
     *
     * @param string $expression Logical expression that must be true to execute this Task
     * @param Task $task
     * @param bool $sync
     */
    public function addAttachment($expression,Task $task, $sync=true ) {

        if (!isset($this->lsAttachments[ATTACH_OK])) {
            $this->lsAttachments[ATTACH_OK] = [];
        }

        $this->lsAttachments[ATTACH_OK][] = Attachment::factory(new Condition($expression), $task, $sync);

    }


    /**
     * Evaluates all attachments of current object.
     * The first match condition execute the associated Task, and then returns the results
     * If none attached condition match, return false
     *
     * @param array $additionalParameters
     * @return bool|mixed
     */
    protected function evaluateAttachments($additionalParameters=[]) {
        if (isset($this->lsAttachments[ATTACH_OK])
             && is_array($this->lsAttachments[ATTACH_OK])
            && !empty(($this->lsAttachments[ATTACH_OK]))
        ) {
            for ($i=0;$i<count($this->lsAttachments[ATTACH_OK]);$i++) {
                $attachment = $this->lsAttachments[ATTACH_OK][$i];
                $result = $this->evaluateCondition($attachment,$additionalParameters);
                if ($result) {
                    return $result;
                }
            }
        }
        return false;
    }

    /**
     * Tests if current condition is true, and if so, execute the attached Task
     *
     * @param Attachment $attachment
     * @param array $additionalParameters
     * @return bool
     */
    protected function evaluateCondition(Attachment $attachment,$additionalParameters=[]) {
        if ($attachment->getCondition()->test()) {
            $newTask = $attachment->getTask();

            $resp = $newTask->exec($additionalParameters);

            $this->getOutput()->addList($newTask->getOutput()->getList());

            return $this->getOutput()->getList();
        } else {
            return false;
        }
    }


    /**
     * Evaluate the error Attachment, running the Task
     */
    protected function evaluateErrorAttachment() {
        if (isset($this->lsAttachments[ATTACH_ERROR])) {
            $newTask = $this->lsAttachments[ATTACH_ERROR];
            if ($newTask instanceof Task) {
                $newTask->exec();
                $this->getOutput()->addList($newTask->getOutput()->getList());
            }
        }
    }



}