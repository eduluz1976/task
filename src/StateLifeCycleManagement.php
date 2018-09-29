<?php
namespace eduluz1976\task;

/**
 * Trait StateLifeCycleManagement
 * @package eduluz1976\task
 * @author Eduardo Luz <eduluz1976@gmail.com>
 * @link https://github.com/eduluz1976/task
 */
trait StateLifeCycleManagement  {

    /**
     * @var array
     */
    protected $states = [];

    /**
     * @return array
     */
    public function getStates(): array
    {
        return $this->states;
    }

    /**
     * @param array $states
     * @return Task
     */
    public function setStates(array $states): Task
    {
        $this->states = $states;
        return $this;
    }

    public function pushState($s) {
        $this->states[] = [microtime(true), $s];
    }
}