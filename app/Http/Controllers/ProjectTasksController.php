<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;

class ProjectTasksController extends Controller
{
    public function store(Project $project)
    {
        $task = request()->validate(['body' => 'required']);

        $project->addTask($task);

        return redirect($project->path());
    }
}
