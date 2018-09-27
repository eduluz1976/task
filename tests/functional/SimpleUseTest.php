<?php
declare(strict_types=0);
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
        $task1->setTaskCallbackOk($task2);


        $response = $task1->exec([1976]);

        $this->assertEquals((2*42), $response);

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


}