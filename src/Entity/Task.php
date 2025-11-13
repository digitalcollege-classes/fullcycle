<?php

namespace App\Entities;

class Task
{
    private string $title;
    private bool $completed = false;

    public function __construct(string $title)
    {
        $this->title = $title;
    }

    public function complete(): void
    {
        $this->completed = true;
    }

    public function isCompleted(): bool
    {
        return $this->completed;
    }

    public function getTitle(): string
    {
        return $this->title;
    }
}

