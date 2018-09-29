<?php
namespace eduluz1976\task;

/**
 * Class Attachment
 * @package eduluz1976\task
 * @author Eduardo Luz <eduluz1976@gmail.com>
 * @link https://github.com/eduluz1976/task
 */
class Attachment {
    protected $condition;
    protected $task;
    protected $synced=true;

    /**
     * @return mixed
     */
    public function getCondition()
    {
        return $this->condition;
    }

    /**
     * @param mixed $condition
     * @return Attachment
     */
    public function setCondition($condition)
    {
        $this->condition = $condition;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTask()
    {
        return $this->task;
    }

    /**
     * @param mixed $task
     * @return Attachment
     */
    public function setTask($task)
    {
        $this->task = $task;
        return $this;
    }

    /**
     * @return bool
     */
    public function isSynced(): bool
    {
        return $this->synced;
    }

    /**
     * @param bool $synced
     * @return Attachment
     */
    public function setSynced(bool $synced): Attachment
    {
        $this->synced = $synced;
        return $this;
    }


    /**
     * @param Condition $condition
     * @param Task $task
     * @param bool $sync
     * @return Attachment
     */
    public static function factory(Condition $condition, Task $task, $sync=true) {
        $obj = new Attachment();
        $obj->setCondition($condition);
        $obj->setTask($task);
        $obj->setSynced($sync);
        return $obj;
    }


}