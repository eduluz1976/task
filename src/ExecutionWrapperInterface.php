<?php
namespace eduluz1976\task;

/**
 * Interface ExecutionWrapperInterface
 * @package eduluz1976\task
 * @author Eduardo Luz <eduluz1976@gmail.com>
 * @link https://github.com/eduluz1976/task
 */
interface ExecutionWrapperInterface {

    /**
     * Returns the active DB connection
     * @return \PDO
     */
    public function getDBConn() : \PDO;

    /**
     * Returns the current log manager
     * @return mixed
     */
    public function getLogger();

    /**
     * Returns the session with user information
     * @todo create a model of session
     * @return mixed
     */
    public function getSession();

    /**
     * Add the $task to list of tasks for this wrapper.
     * @param Task $task
     * @return mixed
     */
    public function registerTask(Task $task);

}