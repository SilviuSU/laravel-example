<?php

namespace App\Repositories;

use App\Models\Task;

class TasksRepository
{
    public function getTask(int $id) : ?Task
    {
        return Task::where("id", $id)->first();
    }
}
