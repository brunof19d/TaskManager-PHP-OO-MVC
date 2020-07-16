<?php
/**
 * @author           Bruno Dadario <brunof19d@gmail.com>
 * @copyright        (c) 2020, Bruno Dadario. All Rights Reserved.
 * @license          Lesser General Public License <http://www.gnu.org/copyleft/lesser.html>
 */

class TaskRepository extends PDO
{
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function saveTask(Task $task)
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

    public function updateTask(Task $task)
    {
        $sqlUpdate = "
            UPDATE task SET
                name = :name,
                description = :description,
                priority = :priority,
                deadline = :deadline,
                finished = :finished
            WHERE id = :id
        ";

        $query = $this->pdo->prepare($sqlUpdate);

        $query->execute([
            'name'          => strip_tags($task->getName()),
            'description'   => strip_tags($task->getDescription()),
            'priority'      => $task->getPriority(),
            'deadline'      => $task->getDeadline(),
            'finished'      => ($task->getFinished()) ? 1 : 0,
            'id'            => $task->getId(),
        ]);
    }

    public function fetch($task_id = 0)
    {
        if ($task_id > 0) {
            return $this->fetchTask($task_id);
        } else {
            return $this->fetchTasks();
        }
    }

    public function fetchTasks()
    {
        $sqlQuery = 'SELECT * FROM task';
        $resultSql = $this->pdo->query(
            $sqlQuery,
            PDO::FETCH_CLASS,
            'Task'
        );

        $tasks = [];

        foreach ($resultSql as $task) {
            $task->getId();
            $tasks[] = $task;
        }

        return $tasks;
    }

    public function fetchTask($id)
    {
        $sqlQuery = "SELECT * FROM task WHERE id = :id";
        $query = $this->pdo->prepare($sqlQuery);
        $query->execute([
            'id' => $id,
        ]);

        $task = $query->fetchObject('Task');
        $task->getId();

        return $task;
    }

    public function removeTask($id)
    {
        $sqlRemove = " DELETE FROM task WHERE id = :id";

        $query = $this->pdo->prepare($sqlRemove);

        $query->execute([
            'id' => $id
        ]);
    }
}
