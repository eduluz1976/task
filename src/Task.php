<?php
namespace eduluz1976\task;

use eduluz1976\action\Action;
use eduluz1976\action\Parameters;

class Task {

    protected $uid;

    /**
     * @var \eduluz1976\action\Action
     */
    protected $action;

    /**
     * @var Task
     */
    protected $taskCallbackOk;

    /**
     * @var Task
     */
    protected $taskCallbackError;

    /**
     * @var Parameters
     */
    protected $input;

    /**
     * @var Parameters
     */
    protected $output;

    /**
     * @var array
     */
    protected $states = [];


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
     * @return Task
     */
    public function getTaskCallbackOk()
    {
        return $this->taskCallbackOk;
    }

    /**
     * @param Task $taskCallbackOk
     * @return Task
     */
    public function setTaskCallbackOk(Task $taskCallbackOk)
    {
        $this->taskCallbackOk = $taskCallbackOk;
        return $this;
    }

    /**
     * @return Task
     */
    public function getTaskCallbackError()
    {
        return $this->taskCallbackError;
    }

    /**
     * @param Task $taskCallbackError
     * @return Task
     */
    public function setTaskCallbackError(Task $taskCallbackError)
    {
        $this->taskCallbackError = $taskCallbackError;
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





    protected function addState($s) {
        $this->states[] = [microtime(true), $s];
//        echo "\n $s ";
    }



    public function __construct(ExecutionWrapperInterface $wrapper)
    {
        $this->setUid(hash('sha256', random_bytes(32).microtime()));
        $this->setExecutionWrapper($wrapper);
        $this->getExecutionWrapper()->registerTask($this);
    }


    protected function execute(Action $action,$additionalParameters=[]) {


        $action->exec($additionalParameters);

        if ($this->getActionCallbackOk()) {
            $finalResponse = $this->getActionCallbackOk()->exec($this->action->getResponse()->getList());
            $this->getOutput()->addList($finalResponse);
        } else {
            $this->getOutput()->addList($this->action->getResponse()->getList());
        }

    }


    public function exec($additionalParameters=[]) {
        try {
            $this->addState('Starting task execution '.$this->uid);

            $this->getAction()->exec($additionalParameters);


            $this->addState('Execution ok');

            $response = $this->getAction()->getResponse()->getList();

            if ($this->getTaskCallbackOk()) {
                $finalResponse = $this->getTaskCallbackOk()->exec($response);

                $this->getOutput()->addList($this->getTaskCallbackOk()->getOutput()->getList());
            } else {
                $this->getOutput()->addList($response);
                $finalResponse = $response;
            }
            if (is_array($finalResponse)) {
                return reset($finalResponse);
            } else {
                return $finalResponse;
            }

        } catch (\Exception $ex) {
            $this->addState("Error: " . $ex->getMessage());
            if ($this->getTaskCallbackError()) {
                $this->addState("Executing error-handling action");
                $output = $this->getTaskCallbackError()->exec($additionalParameters);
                $this->addState("Error-handling action executed");
                $this->getOutput()->addList($this->getTaskCallbackError()->getOutput()->getList());
            }
        }
    }



}
