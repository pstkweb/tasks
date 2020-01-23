<?php

namespace PstkwebTodo\TaskCollection;

use Countable;

class TaskCollection implements Countable
{
    public $tasks;

    public function __construct()
    {
        $this->tasks = [];
    }

    public function add(Task $task)
    {
        $this->tasks[] = $task;
    }

    public function count()
    {
        return count($tasks);
    }
}
