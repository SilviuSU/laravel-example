<?php

namespace App\Http\Controllers;

use App\Services\TasksService;

class TaskController extends Controller
{
    /** @var TasksService */
    private $tasksService;

    public function __construct(TasksService $tasksService) {
        $this->tasksService = $tasksService;
    }

    public function get(int $id)
    {
        return $this->tasksService->getTask($id);
    }
}
