<?php

//  Incluiar as configuracoes, ajudantes e classes.
require __DIR__ . "/helpers/helper.php";
require __DIR__ . "/src/Database.php";
require __DIR__ . "/src/Task.php";
require __DIR__ . "/src/TaskRepository.php";

// Criar um objeto da classe RepositorioTarefas

// Verificar qual arquivo (rota) deve ser usado para tratar a requisição
$route = "tasks"; // Rota Padrao

if (array_key_exists("route", $_GET)) {
    $route = (string) $_GET["route"];
}

// Incluir o arquivo que vai tratar a requisição
if (is_file("controllers/{$route}.php")) {
    require "controllers/{$route}.php";
} else {
    require "controllers/404.php";
}