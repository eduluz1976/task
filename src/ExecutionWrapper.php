<?php
namespace eduluz1976\task;

/**
 * Class ExecutionWrapper
 * @package eduluz1976\task
 * @author Eduardo Luz <eduluz1976@gmail.com>
 * @link https://github.com/eduluz1976/task
 */
class ExecutionWrapper implements ExecutionWrapperInterface {

    protected $dbConn;
    protected $logger;
    protected $session;
    protected $lsTasks = [];



    /**
     * Returns the active DB connection
     * @return \PDO
     */
    public function getDBConn(): \PDO
    {
        // TODO: Implement getDBConn() method.
    }

    /**
     * Returns the current log manager
     * @return mixed
     */
    public function getLogger()
    {
        return $this->logger;
    }

    /**
     * Returns the session with user information
     * @todo create a model of session
     * @return mixed
     */
    public function getSession()
    {
        // TODO: Implement getSession() method.
    }

    /**
     * Add the $task to list of tasks for this wrapper.
     * @param Task $task
     * @return mixed
     */
    public function registerTask(Task $task)
    {
        // TODO: Implement registerTask() method.
    }

    /**
     * @return array
     */
    public function getLsTasks(): array
    {
        return $this->lsTasks;
    }

    /**
     * @param array $lsTasks
     */
    public function setLsTasks(array $lsTasks)
    {
        $this->lsTasks = $lsTasks;
    }

    /**
     * @param mixed $dbConn
     * @return ExecutionWrapper
     */
    public function setDbConn($dbConn)
    {
        $this->dbConn = $dbConn;
        return $this;
    }

    /**
     * @param mixed $logger
     * @return ExecutionWrapper
     */
    public function setLogger($logger)
    {
        $this->logger = $logger;
        return $this;
    }

    /**
     * @param mixed $session
     * @return ExecutionWrapper
     */
    public function setSession($session)
    {
        $this->session = $session;
        return $this;
    }



}