<!DOCTYPE html>
<html lang="en" dir="ltr">
 <head>
   <meta charset="utf-8">
   <title>TASK</title>
 </head>
 <body>
   <!-- within laravel feel free to replace the php tags with @ blades -->
   <ul>
     <?php foreach ( $tasks as $task ) : ?>
       <li>
         <?php if ($task->completed) : ?>
           <!-- if task completed strike-through -->
           <strike>
         <?php endif ?>
          <!-- php short hand used here.. feel free to state or express the li line as ... normal -->
          <?= $task->description ?>

          <?php if ($task->completed) : ?>
            <strike>
          <?php endif; ?>
       </li>
     <?php endforeach; ?>

     <!-- another | cleaner waay to do the above is shown below -->

   </ul>

<!--
i will explain the logic of the above here

1 create ul
2 use task array from task.php which holds the created task
3 loop through and display each task object from array
4 if a task is completed == true, then strike through to show completed
5 also show contents of the object like description and completed  -->


 </body>
