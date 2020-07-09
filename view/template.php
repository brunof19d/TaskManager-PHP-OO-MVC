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
        <form class="form-conteiner" action="" method="post">
            <fieldset>
                <legend>New Task</legend>
                <label for="">Name:</label>
                <input type="text" name="name_task" value="" placeholder="Name task">
                <label for="">Description (Optional): </label>
                <textarea class="wt-resize" name="description" placeholder="Enter your description here"></textarea>
                <label for="">Deadline (Optional):</label>
                <input type="date" name="deadline">
                <label for="">Priority:</label>
                <input type="radio" class="input-priority" name="prioridade" value="1" /> Low
                <input type="radio" name="prioridade" value="2" /> Medium
                <input type="radio" name="prioridade" value="3" /> High
                <label for="">Task finished <input type="checkbox" class="input-check" name="" value=""></label>
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

            <tr>
                <td class="th-medium">Study PHP</td>
                <td>Study PHP Pratic and Alura</td>
                <td class="th-low">19/09/1994</td>
                <td class="th-low">Medium</td>
                <td class="th-low">No</td>
                <td class="th-medium">
                    <button type="submit" class="btn btn-edit" name="button">Edit</button>
                    <button type="submit" class="btn btn-delete" name="button">Delete</button>
                </td>
            </tr>
        </table>
    </div>
</body>
<footer>
    <p class="text-footer">&copy; Bruno Dadario. All rights reserved.</p>
</footer>

</html>
