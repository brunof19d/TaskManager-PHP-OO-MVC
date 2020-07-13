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

        <?php if ($show_table == TRUE) : ?>
            <?php require __DIR__ . "/template_table.php"; ?>
        <?php endif; ?>

    </div>
</body>

<footer>
    <p class="text-footer">&copy; Bruno Dadario. All rights reserved.</p>
</footer>

</html>