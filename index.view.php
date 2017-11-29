<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8" />
      <title>My First site</title>
      <style>
      header {
      	background: #e3e3e3;
      	padding: 4em;
      	text-align: center;
      }
      </style>
   </head>
   <body>
      <header>
<ul>
  <?php foreach ($tasks as $task) : ?>
    <?php if ($task->complited) : ?>
      <li><strike><?= $task->description; ?></strike></li>
    <?php else : ?>
    <li><?= $task->description; ?></li>
<?php endif; ?>
  <?php endforeach; ?>
</ul>
      </header>
   </body>
</html>
