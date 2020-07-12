<?php

require __DIR__ . "/../src/TaskRepository.php";
require __DIR__ . "/../src/Database.php";

$pdo = Database::conectar();
$repository_task = new TaskRepository($pdo);
$repository_task->removeTask($_GET['id']);

header('Location: ../index.php');
