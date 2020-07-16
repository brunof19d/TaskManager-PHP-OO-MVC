<?php
/**
 * @author           Bruno Dadario <brunof19d@gmail.com>
 * @copyright        (c) 2020, Bruno Dadario. All Rights Reserved.
 * @license          Lesser General Public License <http://www.gnu.org/copyleft/lesser.html>
 */

require __DIR__ . "/../src/TaskRepository.php";
require __DIR__ . "/../src/Database.php";

// Create object the Database Class
$pdo = Database::connectDB();

// Create object the TaskRepository Class
$repository_task = new TaskRepository($pdo);
$repository_task->removeTask($_GET['id']);

header('Location: ../index.php');
