<?php
namespace eduluz1976\task;


use eduluz1976\action\Action;

class TaskTest extends \PHPUnit\Framework\TestCase
{

    public function testSetAction() {

        $wrapper = new ExecutionWrapper();

        $task = new Task($wrapper);

        $action = Action::factory('MyClass::myMethod()');

        $this->assertInstanceOf(Task::class, $task->setAction($action));
        $this->assertEquals('MyClass', $task->getAction()->getClassName());

    }


    public function testInput() {
        $task = new Task(new ExecutionWrapper());
        $task->getInput()->add('name','John');
        $this->assertEquals('John', $task->getInput()->get('name'));
    }



}
