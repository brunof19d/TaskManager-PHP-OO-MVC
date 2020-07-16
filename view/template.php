<?php
/**
 * @author           Bruno Dadario <brunof19d@gmail.com>
 * @copyright        (c) 2020, Bruno Dadario. All Rights Reserved.
 * @license          Lesser General Public License <http://www.gnu.org/copyleft/lesser.html>
 */
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Task Manager</title>
</head>

<header>
    <h1>Task Manager PHP</h1>
</header>

<body>
    <div class="main-conteiner">

        <?php require __DIR__ . "/template_form.php"; ?>

        <?php require __DIR__ . "/template_table.php"; ?>

    </div>
</body>

<footer>
    <p class="text-footer">&copy; Bruno Dadario. All rights reserved.</p>
</footer>

</html>