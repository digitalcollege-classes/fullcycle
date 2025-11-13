<?php

namespace App\Services;

use App\Entities\Task;

class TaskService
{
    private array $tasks = [];

    public function addTask(string $title): Task
    {
        $task = new Task($title);
        $this->tasks[] = $task;
        return $task;
    }

    public function completeTask(Task $task): void
    {
        $task->complete();
    }

    public function listCompleted(): array
    {
        return array_filter($this->tasks, fn ($t) => $t->isCompleted());
    }

    public function listPending(): array
    {
        return array_filter($this->tasks, fn ($t) => !$t->isCompleted());
    }
}

