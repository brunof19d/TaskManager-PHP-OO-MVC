<?php
/**
 * @author           Bruno Dadario <brunof19d@gmail.com>
 * @copyright        (c) 2020, Bruno Dadario. All Rights Reserved.
 * @license          Lesser General Public License <http://www.gnu.org/copyleft/lesser.html>
 */

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

    if ( $finished == 0)

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

function showDateTable($date)
{
    if ($date == "" OR $date == "0000-00-00") {
        return "";
    }

    $datas = explode("-", $date);

    if (count($datas) != 3) {
        return $date;
    }

    $date_show = "{$datas[2]}/{$datas[1]}/{$datas[0]}";

    return $date_show;
}
