<?php

namespace App\Services;

use App\Repositories\TasksRepository;
use App\Models\Task;

class TasksService
{
    /** @var TasksRepository  */
    private $tasksRepository;

    public function __construct(TasksRepository $tasksRepository)
    {
        $this->tasksRepository = $tasksRepository;
    }

    public function getTask(int $id) : ?Task
    {
        return $this->tasksRepository->getTask($id);
    }
}
