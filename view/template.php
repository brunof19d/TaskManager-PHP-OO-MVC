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
        <form class="form-conteiner" action="" method="post">
            <fieldset>

                <legend>New Task</legend>

                <!-- Label Name -->
                <label>Name:
                    <?php if ($error_span && isset($error_validation['name_task'])) : ?>
                        <span class="span-error">
                            <?php echo $error_validation['name_task']; ?>
                        </span>
                    <?php endif; ?>
                </label>
                <input type="text" name="name_task" value="" placeholder="Name task">

                <!-- Label Description -->
                <label for="">Description (Optional): </label>
                <textarea class="wt-resize" name="description_task" placeholder="Enter your description here"></textarea>

                <!-- Label Deadline -->
                <label for="">Deadline (Optional):</label>
                <input type="date" name="deadline">

                <!-- Label Priority -->
                <label for="">Priority:</label>
                <input type="radio" name="input-priority" value="1" checked /> Low
                <input type="radio" name="input-priority" value="2" /> Medium
                <input type="radio" name="input-priority" value="3" /> High

                <!-- Label Task finished -->
                <label for="">Task finished <input type="checkbox" class="input-check" name="finished" value="1"></label>
                <button type="submit" class="btn btn-create" name="button">Create</button>

            </fieldset>
        </form>

        <table>
            <tr>
                <th class="th-medium">Task</th>
                <th>Description</th>
                <th class="th-low">Deadline</th>
                <th class="th-low">Priority</th>
                <th class="th-low">Finished</th>
                <th class="th-medium">Options</th>
            </tr>
            <?php foreach ($tarefas as $task) : ?>               
            <tr>
                <td class="th-medium">
                    <?php echo $task->getName(); ?>
                </td>
                <td>
                    <?php echo $task->getDescription(); ?>
                </td>
                <td class="th-low">
                    <?php echo $task->getDeadline(); ?>
                </td>
                <td class="th-low">
                    <?php echo transformPriority($task->getPriority()); ?>
                </td>
                <td class="th-low">
                    <?php echo transformFinished($task->getFinished()); ?>
                </td>
                <td class="th-medium">
                    <button type="submit" class="btn btn-edit" name="button">Edit</button>
                    <button type="submit" class="btn btn-delete" name="button">Delete</button>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    </div>
</body>
<footer>
    <p class="text-footer">&copy; Bruno Dadario. All rights reserved.</p>
</footer>

</html>