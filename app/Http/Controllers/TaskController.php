<?php

namespace App\Http\Controllers;

use App\Http\Resources\TaskCollection;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index(Request $request)
    {
        return new TaskCollection(Task::all());
    }
}

/*
return a json response of all the Task objects:
    -return response()->json(Task::all());

return all Task objects as a collection in the format indicated in task resource
    -return new TaskCollection(Task::all());

NB: TaskResource(JsonResource) is different from TaskCollection(ResourceCollection)
 although you create both of them using make:resource command.
 Changes are made to the format which the object is shown in the TaskResource
*/


