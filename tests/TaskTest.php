<?php

use App\Entities\Task;
use PHPUnit\Framework\TestCase;

class TaskTest extends TestCase
{
    public function test_task_can_be_completed()
    {
        $task = new Task('Write tests');
        $task->complete();

        $this->assertTrue($task->isCompleted());
    }
}

