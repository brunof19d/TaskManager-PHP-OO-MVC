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

function traduz_data_para_exibir($data)
{
    if (is_object($data) && get_class($data) == "DateTime") {
        return $data->format("d/m/Y");
    }

    if ($data == "" or $data == "00-00-0000") {
        return "";
    }

    $dados = explode("-", $data);

    if (count($dados) != 3) {
        return $data;
    }

    $data_exibir = "{$dados[2]}/{$dados[1]}/{$dados[0]}";

    return $data_exibir;
}
