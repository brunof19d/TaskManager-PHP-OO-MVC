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