<?php
namespace eduluz1976\task;

use eduluz1976\action\Action;
use eduluz1976\action\Parameters;

/**
 * Class Task
 * @package eduluz1976\task
 * @author Eduardo Luz <eduluz1976@gmail.com>
 * @link https://github.com/eduluz1976/task
 */
class Task {
    use AttachmentManager;
    use StateLifeCycleManagement;

    protected $uid;

    /**
     * @var \eduluz1976\action\Action
     */
    protected $action;

    /**
     * @var Parameters
     */
    protected $input;

    /**
     * @var Parameters
     */
    protected $output;


    /**
     * @var ExecutionWrapperInterface
     */
    protected $executionWrapper;


    /**
     * @return \eduluz1976\action\Action
     */
    public function getAction(): \eduluz1976\action\Action
    {
        return $this->action;
    }

    /**
     * @param \eduluz1976\action\Action $action
     * @return Task
     */
    public function setAction(\eduluz1976\action\Action $action): Task
    {
        $this->action = $action;
        return $this;
    }

    /**
     * @return Parameters
     */
    public function getInput(): Parameters
    {
        if (!$this->input) {
            $this->input = new Parameters();
        }
        return $this->input;
    }

    /**
     * @param Parameters $input
     * @return Task
     */
    public function setInput(Parameters $input): Task
    {
        $this->input = $input;
        return $this;
    }

    /**
     * @return Parameters
     */
    public function getOutput(): Parameters
    {
        if (!$this->output) {
            $this->output = new Parameters();
        }
        return $this->output;
    }

    /**
     * @param Parameters $output
     * @return Task
     */
    public function setOutput(Parameters $output): Task
    {
        $this->output = $output;
        return $this;
    }

    /**
     * @return ExecutionWrapperInterface
     */
    public function getExecutionWrapper(): ExecutionWrapperInterface
    {
        return $this->executionWrapper;
    }

    /**
     * @param ExecutionWrapperInterface $executionWrapper
     * @return Task
     */
    public function setExecutionWrapper(ExecutionWrapperInterface $executionWrapper): Task
    {
        $this->executionWrapper = $executionWrapper;
        return $this;
    }

    /**
     * @return string
     */
    public function getUid(): string
    {
        return $this->uid;
    }

    /**
     * @param string $uid
     * @return Task
     */
    public function setUid(string $uid): Task
    {
        $this->uid = $uid;
        return $this;
    }



    /**
     * @param $s
     */
    protected function addState($s) {
        if ($this->getExecutionWrapper()->getLogger()) {
            $this->getExecutionWrapper()->getLogger()->log($s);
        }
        $this->pushState($s);
    }


    /**
     * Task constructor.
     * @param ExecutionWrapperInterface $wrapper
     */
    public function __construct(ExecutionWrapperInterface $wrapper)
    {
        $this->setUid(hash('sha256', random_bytes(32).microtime()));
        $this->setExecutionWrapper($wrapper);
        $this->getExecutionWrapper()->registerTask($this);
    }


    /**
     *
     * @param Action $action
     * @param array $additionalParameters
     * @return array
     */
    protected function execute(Action $action,$additionalParameters=[]) {
        try {
        $this->addState('Starting task execution '.$this->uid);

        $action->exec($additionalParameters);

        $this->addState('Execution ok');

        $newParameters = array_replace($additionalParameters, $action->getResponse()->getList());

        $resp = $this->evaluateAttachments($newParameters);

        if (is_array($resp)) {
            $this->getOutput()->addList($resp);
        }

        } catch (\Exception $ex) {
            $this->addState("Error: " . $ex->getMessage());

            $this->evaluateErrorAttachment();
        }
        return $this->getOutput()->getList();
    }


    /**
     * Execute this task.
     *
     * @param array $additionalParameters
     * @return array|mixed
     */
    public function exec($additionalParameters=[]) {
        try {
            $resp = $this->execute($this->getAction(),$additionalParameters);
            $result = array_replace($this->getAction()->getResponse()->getList(),$resp);

            $this->getOutput()->addList($result);

            $response = $this->getOutput()->getList();

            if (is_array($response)) {
                return reset($response);
            } else {
                return $response;
            }

        } catch (\Exception $ex) {
            $this->addState("Error: " . $ex->getMessage());
            $this->evaluateErrorAttachment();
        }
    }



    
}
