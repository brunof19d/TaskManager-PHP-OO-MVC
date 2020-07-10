<?php

function inputPost()
{
    if (count($_POST) > 0) {
        return true;
    }

    return false;
}

function transformFinished($finished)
{
    if ($finished == 1) {
        return 'Yes';
    }

    return 'No';
}

function transformPriority($code)
{
    $priority = '';
    switch ($code) {
        case 1:
            $priority = 'Low';
            break;
        case 2:
            $priority = 'Medium';
            break;
        case 3:
            $priority = 'High';
            break;
    }

    return $priority;
}