<?php

class Task
{
  
    private $name;
    private $description;
    private $deadline;
    private $priority;
    private $finished;

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }
    
    public function getDescription()
    {
        return $this->description;
    }

    public function setDeadline($deadline)
    {
        $this->deadline = $deadline;
    }
    
    public function getDeadline()
    {
        return $this->deadline;
    }

    public function setPriority($priority)
    {
        $this->priority = $priority;
    }

    public function getPriority()
    {
        return $this->priority;
    }

    public function setFinished($finished)
    {
        $this->finished = $finished;
    }

    public function getFinished()
    {
        return $this->finished;
    }

}