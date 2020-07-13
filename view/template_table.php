<table>
    <tr>
        <th>Task</th>
        <th>Description</th>
        <th>Deadline</th>
        <th>Priority</th>
        <th>Finished</th>
        <th>Options</th>
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
                <?php echo showDateTable($task->getDeadline()); ?>
            </td>
            <td class="th-low">
                <?php echo transformPriority($task->getPriority()); ?>
            </td>
            <td class="th-low">
                <?php echo transformFinished($task->getFinished()); ?>
            </td>
            <td class="th-medium">
                <a class="class-a-button" href="controllers/edit.php?id=<?php echo $task->getId(); ?>">
                    <button type="submit" class="btn btn-edit" name="button">Edit</button>
                </a>
                <a class="class-a-button" href="controllers/delete.php?id=<?php echo $task->getId(); ?>">
                    <button type="submit" class="btn btn-delete" name="button">Delete</button>
                </a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>