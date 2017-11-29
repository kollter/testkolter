<?php
$query = require 'bootstrap.php';

$tasks = $query->selectAll('todos');

require 'index.view.php';





//require 'Task.php';

//$tasks = array_map(function ($task) {    |Заменет и вернет все результаты на foo
//  return 'foo';
//}, $tasks);
/*$tasks = array_map(function ($task) {
  $t = new Task();
  $t->description = $task['description'];
}, $tasks); */
