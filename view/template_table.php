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