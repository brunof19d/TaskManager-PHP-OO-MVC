<?php

class TaskRepository extends PDO
{
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function salvar(Task $task)
    {

        $sqlSave = "
            INSERT INTO task
            (name, description, priority, deadline, finished)
            VALUES
            (:name, :description, :priority, :deadline, :finished)
        ";

        $query = $this->pdo->prepare($sqlSave);
        
        $query->execute([
            'name'          => strip_tags($task->getName()),
            'description'   => strip_tags($task->getDescription()),
            'priority'      => $task->getPriority(),
            'deadline'      => $task->getDeadline(),
            'finished'      => ($task->getFinished()) ? 1 : 0,
        ]);
    }

    public function buscar($tarefa_id = 0)
    {
        if ($tarefa_id > 0) {
            return $this->buscar_tarefa($tarefa_id);
        } else {
            return $this->buscar_tarefas();
        }
    }

    private function buscar_tarefas()
    {
        $sqlBusca = 'SELECT * FROM task';
        $resultado = $this->pdo->query(
            $sqlBusca,
            PDO::FETCH_CLASS,
            'Task'
        );

        $tarefas = [];

        foreach ($resultado as $tarefa) {
            $tarefa->getId();
            $tarefas[] = $tarefa;
        }

        return $tarefas;
    }

    private function buscar_tarefa($id)
    {
        $sqlBusca = "SELECT * FROM tarefas WHERE id = :id";
        $query = $this->pdo->prepare($sqlBusca);
        $query->execute([
            'id' => $id,
        ]);

        $tarefa = $query->fetchObject('Tarefa');
        $tarefa->getId();

        return $tarefa;
    }



}