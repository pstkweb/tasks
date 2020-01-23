<?php

namespace PstkwebTodo\TodoList.php;

class TodoList
{
    /**
     * @var TaskCollection
     */
    private $tasks;

    public function __construct()
    {
        $tasks = new TaskCollection();
    }

    public function addTask(Task $task): void
    {
        $this->tasks->add($task);
    }

    public function hasTasks(): bool
    {
        return $this->tasks->count() > 0;
    }
}
