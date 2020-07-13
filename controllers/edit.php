<?php

require __DIR__ . "/../helpers/helper.php";
require __DIR__ . "/../src/TaskRepository.php";
require __DIR__ . "/../src/Database.php";
require __DIR__ . "/../src/Task.php";

$pdo = Database::connectDB();
$task = new Task();
$repository_task = new TaskRepository($pdo);
$task = $repository_task->fetch($_GET['id']);
$error_span = false;
$error_validation = [];

if (inputPost()) {

    if (array_key_exists('name_task', $_POST) && strlen($_POST['name_task']) > 0) {
        $task->setName($_POST['name_task']);
    } else {
        $error_span = true;
        $error_validation['name_task'] = 'Name is required.';
    }

    if (array_key_exists('description_task', $_POST)) {
        $task->setDescription($_POST['description_task']);
    } else {
        $task_description['description_task'] = "";
    }

    if (array_key_exists('deadline', $_POST) && strlen($_POST['deadline']) > 0) {
        $task->setDeadline($_POST['deadline']);
    } else {
        $error_span = true;
        $error_validation['deadline'] = 'Date is incorrect';
    }

    $task->setPriority($_POST['input-priority']);

    if (isset($_POST['finished'])) {
        $task->setFinished(true);
    } else {
        $task->setFinished(false);
    }

    if (!$error_span) {
        $repository_task->updateTask($task);
        header('Location: ../index.php');
        die();
    }
}

include __DIR__ . "/../view/template_task.php";


