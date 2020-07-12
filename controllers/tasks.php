<?php

$error_span = false;
$error_validation = [];

// Checking for POST
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

    if (array_key_exists('finished', $_POST)) {
        $task->setFinished(true);
    } else {
        $task->getFinished(false);
    }

    if (!$error_span) {
        $repository_task->saveTask($task);
        header('Location: index.php');
        die();
    }
}

$tarefas = $repository_task->buscar();

require __DIR__ . "/../view/template.php";
