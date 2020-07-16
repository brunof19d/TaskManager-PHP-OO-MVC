<?php
/**
 * @author           Bruno Dadario <brunof19d@gmail.com>
 * @copyright        (c) 2020, Bruno Dadario. All Rights Reserved.
 * @license          Lesser General Public License <http://www.gnu.org/copyleft/lesser.html>
 */

// Include helpers and class
require __DIR__ . "/helpers/helper.php";
require __DIR__ . "/src/Database.php";
require __DIR__ . "/src/Task.php";
require __DIR__ . "/src/TaskRepository.php";

// Create object the Database Class
$pdo = Database::connectDB();

// Create object the Task Class
$task = new Task();

// Create object the TaskRepository Class
$repository_task = new TaskRepository($pdo);

// Check which file (route) to use to handle the request
$route = "tasks"; // Rota Padrao

if (array_key_exists("route", $_GET)) {
    $route = (string) $_GET["route"];
}

// Include the file that will handle the request
if (is_file("controllers/{$route}.php")) {
    require "controllers/{$route}.php";
} else {
    require "controllers/404.php";
}
