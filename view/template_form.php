<?php
/**
 * @author           Bruno Dadario <brunof19d@gmail.com>
 * @copyright        (c) 2020, Bruno Dadario. All Rights Reserved.
 * @license          Lesser General Public License <http://www.gnu.org/copyleft/lesser.html>
 */
?>

<form class="form-conteiner" method="post">
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
        <input type="text" name="name_task" placeholder="Name task">

        <!-- Label Description -->
        <label>Description (Optional): </label>
        <textarea class="wt-resize" name="description_task" placeholder="Enter your description here"></textarea>

        <!-- Label Deadline -->
        <label>Deadline:
            <?php if ($error_span && isset($error_validation['deadline'])) : ?>
                <span class="span-error">
                    <?php echo $error_validation['deadline']; ?>
                </span>
            <?php endif; ?>
        </label>
        <input type="date" name="deadline" placeholder="dd/mm/yy">

        <!-- Label Priority -->
        <label>Priority:</label>
        <input type="radio" name="input-priority" value="1" checked /> Low
        <input type="radio" name="input-priority" value="2" /> Medium
        <input type="radio" name="input-priority" value="3" /> High

        <!-- Label Task finished -->
        <label>Task finished <input type="checkbox" class="input-check" name="finished" value="1"></label>
        <button type="submit" class="btn btn-create" name="button">Create</button>

    </fieldset>
</form>