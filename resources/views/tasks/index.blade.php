<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <ul>
<?php foreach ($tasks as $task):?>
  <li><a  href="/tasks/<?php echo $task->id ?>">

    <?php echo $task->body ?></li>
    </a>
<?php endforeach ?>
    </ul>
  </body>
</html>
