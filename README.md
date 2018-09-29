# eduluz1976/Task

This package aims to create and store programatic Tasks, that can be executed (or enqueued to be executed later), 
with some features, such as:

- Chained execution: you can attach another set of Tasks to be executed after current Task. Only the first condition returning true will trigger the corresponding Action execution;
- Error management: you can also attach an Task to deal with Exception conditions;
- Result propagation: the results of one Task are passed to next, and so on, until the last have finished; 


## Installation
 
 
```
composer require eduluz1976/task
``` 
 

## Quick Start

```php 
<?php 

$task = new \eduluz1976\task\Task(new \eduluz1976\task\ExecutionWrapper());

$action = Action::factory('eduluz1976\task\MyClass::calculateHowOldIs()');

$task->setAction($action)

$response = $task1->exec([1976]);

// should return 43, if the current year is 2019  

``` 
 
 