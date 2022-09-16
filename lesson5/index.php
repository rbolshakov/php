<?php

include "Comment.php";
include "User.php";
include "Task.php";
include "TaskService.php";

$user = new User('user1', 'user@email.com');
$task = new Task($user, 'Task № 1', 6);

$task->setComment(new Comment($user, $task, 'quickly'));

TaskService::addComment($user, $task, 'FirstComment');
TaskService::addComment($user, $task, 'SecondComment');

echo "Comment" . PHP_EOL;


foreach ($task->getComments() as $comment) {
  echo $comment->getText() . ", ";
  echo "Task name " . $comment->getTask()->getDesc() . PHP_EOL;
}
