<?php

namespace Pstkweb\Todo;

class TodoList
{
    /**
     * @var TaskCollection
     */
    private $tasks;

    public function __construct(TaskCollection $tasks)
    {
        $this->tasks = $tasks;
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
