<?php

namespace PstkwebTodo\Task;

class Task
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var bool
     */
    private $done;

    public function __construct(string $name)
    {
        $this->name = $name;
        $this->done = false;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function isDone(): bool
    {
        return $this->done;
    }

    public function setDone(bool $done)
    {
        $this->done = $done;
    }
}
