<?php

use App\Services\TaskService;
use PHPUnit\Framework\TestCase;

class TaskServiceTest extends TestCase
{
    public function test_can_add_and_complete_task()
    {
        $service = new TaskService();
        $task = $service->addTask('Prepare slides');

        $this->assertCount(1, $service->listPending());
        $this->assertCount(0, $service->listCompleted());

        $service->completeTask($task);

        $this->assertCount(0, $service->listPending());
        $this->assertCount(1, $service->listCompleted());
    }
}

