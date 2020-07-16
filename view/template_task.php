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
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>Task Manager</title>
</head>

<header>
    <h1>Task Manager PHP</h1>
</header>

<body>
    <div class="main-conteiner">
        <form class="form-conteiner" method="post">
        <p><a class="backPage" href="../index.php">Back to a task list.</a></p>
            <!-- Label Name -->
            <label>Name:
                <?php if ($error_span && isset($error_validation['name_task'])) : ?>
                    <span class="span-error">
                        <?php echo $error_validation['name_task']; ?>
                    </span>
                <?php endif; ?>
            </label>
            <input type="text" name="name_task" value="<?php echo htmlentities($task->getName()); ?>">

            <!-- Label Description -->
            <label>Description (Optional):</label>
            <textarea class="wt-resize" name="description_task"><?php echo htmlentities($task->getDescription()); ?></textarea>

            <!-- Label Deadline -->
            <label>Deadline:
                <?php if ($error_span && isset($error_validation['deadline'])) : ?>
                    <span class="span-error">
                        <?php echo $error_validation['deadline']; ?>
                    </span>
                <?php endif; ?>
            </label>
            <input type="date" name="deadline" value="<?php echo showDateTable($task->getDeadline()); ?>">

            <!-- Label Priority -->
            <label>Priority:</label>
            <input type="radio" name="input-priority" value="1" <?php echo ($task->getPriority() == 1) ? 'checked' : ''; ?> /> Low
            <input type="radio" name="input-priority" value="2" <?php echo ($task->getPriority() == 2) ? 'checked' : ''; ?> /> Medium
            <input type="radio" name="input-priority" value="3" <?php echo ($task->getPriority() == 3) ? 'checked' : ''; ?> /> High

            <!-- Label Task finished -->
            <label>Task finished
                <input type="checkbox" class="input-check" name="finished" value="1" <?php echo ($task->getFinished() == 1) ? 'checked' : ''; ?> />
            </label>
            <button type="submit" class="btn btn-edit-page" name="button">Update</button>
        </form>

    </div>
</body>

<footer>
    <p class="text-footer">&copy; Bruno Dadario. All rights reserved.</p>
</footer>

</html>