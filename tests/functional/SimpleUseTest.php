<?php
namespace eduluz1976\task;


use eduluz1976\action\Action;


class SimpleUseTest extends \PHPUnit\Framework\TestCase
{

    public function testSimpleExecution() {

        $task = new Task(new ExecutionWrapper());

        $action = Action::factory('eduluz1976\task\MyClass::calculateHowOldIs()');

        $this->assertInstanceOf(Task::class, $task->setAction($action));

        $response = $action->exec([1976]);

        $this->assertEquals(42, $response);

    }

    public function testSimplePipelineExecution() {

        $wrapper = new ExecutionWrapper();

        $task1 = new Task($wrapper);
        $action1 = Action::factory('eduluz1976\task\MyClass::calculateHowOldIs()');
        $this->assertInstanceOf(Task::class, $task1->setAction($action1));

        $task2 = new Task($wrapper);
        $action2 = Action::factory('eduluz1976\task\MyClass::multiply()',[0,2]);
        $this->assertInstanceOf(Task::class, $task2->setAction($action2));
        $task1->addAttachment(1, $task2);

        $response = $task1->exec([1976]);

        $this->assertEquals((2*42), $response);

    }



    public function testPipelineWithException() {

        $wrapper = new ExecutionWrapper();

        $wrapper->setLogger(new class{

            protected $logs = [];

            public function log($msg) {
                $this->logs[] = $msg;
            }

            public function dump() {
                return $this->logs;
            }

        });


        $task1 = new Task($wrapper);
        $action1 = Action::factory('eduluz1976\task\MyClass::calculateHowOldIs()');
        $this->assertInstanceOf(Task::class, $task1->setAction($action1));

        $task2 = new Task($wrapper);
        $action2 = Action::factory('eduluz1976\task\MyClass::triggerException()');
        $this->assertInstanceOf(Task::class, $task2->setAction($action2));
        $task1->addAttachment(1, $task2);

        $task3 = new Task($wrapper);
        $action3 = Action::factory('eduluz1976\task\MyClass::multiply()',[2]);
        $this->assertInstanceOf(Task::class, $task3->setAction($action3));
        $task2->addErrorAttachment($task3);

        $response = $task1->exec([1976]);

      //  print_r($wrapper->getLogger()->dump());

        $this->assertEquals((2), $response);
    }



    public function testPipelineWithException2() {

        $wrapper = new ExecutionWrapper();

        $wrapper->setLogger(new class{

            protected $logs = [];

            public function log($msg) {
                $this->logs[] = $msg;
            }

            public function dump() {
                return $this->logs;
            }

        });


        $task1 = new Task($wrapper);
        $action1 = Action::factory('eduluz1976\task\MyClass::triggerException()');
        $this->assertInstanceOf(Task::class, $task1->setAction($action1));

        $task2 = new Task($wrapper);
        $action2 = Action::factory('eduluz1976\task\MyClass::calculateHowOldIs()');
        $this->assertInstanceOf(Task::class, $task2->setAction($action2));
        $task1->addAttachment(1, $task2);

        $task3 = new Task($wrapper);
        $action3 = Action::factory('eduluz1976\task\MyClass::multiply()',[123,2]);
        $this->assertInstanceOf(Task::class, $task3->setAction($action3));
        $task1->addErrorAttachment($task3);

        $response = $task1->exec([1976]);

//        print_r($wrapper->getLogger()->dump());

        $this->assertEquals((246), $response);
    }




}




class MyClass {

    public function calculateHowOldIs($yearBirth) {
        $year = date('Y');

        if ($yearBirth<100) {
            if ($yearBirth < $year) {
                $yearBirth += 2000;
            } else {
                $yearBirth += 1900;
            }
        }

        return $year - $yearBirth;
    }

    public function multiply($number, $multiplier=1) {
        return $number*$multiplier;
    }

    public function triggerException() {
        throw new \Exception("error triggered",1);
    }


}