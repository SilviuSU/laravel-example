<?php

use App\Models\Task;

use App\Repositories\TasksRepository;
use App\Services\TasksService;

class TaskServiceTest extends TestCase
{
    public function testTasksRepository()
    {

        $taskRepository = $this->getMockBuilder(TasksRepository::class)
            ->disableOriginalConstructor()
            ->disableOriginalClone()
            ->disableArgumentCloning()
            ->disallowMockingUnknownTypes()
            ->getMock();

        $task = new Task();
        $task->name = "Test Name";

        $taskRepository->method('getTask')
            ->willReturn($task);

        $taskService = new TasksService($taskRepository);

        $taskFound = $taskService->getTask(1);

        $this->assertInstanceOf(Task::class, $taskFound);
        $this->assertEquals($taskFound->name, $task->name);
    }
}
