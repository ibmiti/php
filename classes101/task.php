<?php

// think of classes as a representation of any one thing within our application
// e.g ... point out the [ nouns.. person , product, todo/task, comment, task, user, person, car, etc ]

class Task {
  // this will be a property, that every new object will inherit.. and will also be mutable with direct access ( encapsulation )
  // protected $description;

// public property
public $description;
// public property
public $completed = false;

// public method
// on task class instantiation run this method // new Task('task');
public function __construct($description)
{
  $this->description = $description;
}

public function complete()
{
  $this->completed = true;
}

// attempted to access/mutate the privately encapsulated propert of $complete / can and will act as a boolean check ( true / false )
public function isComplete()
{
  return $this->completed;
}

// use this method when and if the description propert has a private encapsulation
public function description()
{
  return $this->description;
}

// use this method when and if the completed property has a private encapsulation
public function completed()
{
  return $this->completed;
}

}

// new instantiation of class ... giving it description of 'go to store'
$task = new Task('Go to the store');

// accessing task with object accessor pulling out the complete() method
// will return the value defined in the method
$task->complete();

// if accessing this way and we have a encapsulation around the complete method this will not work
$task->completed;

// below is another way to use the class and its available methods and properties ( createing new objects and inserting those within an array )
// each new task within the array is an instance of the class, they are now treated as objects..
$tasks = [
  new Task('go to the store'),
  new Task('go running'),
  new Task('finish bug fix for client')
];

// another way to show completion of tasks ( we can express all of the logic here and use very minimal logic within view )

// this calls the complete() method to flip the completed booleans value to true, can then be displayed in the view
$tasks[0]->complete();
$tasks[1]->complete();
$tasks[2]->complete();

require 'index.view.php';
