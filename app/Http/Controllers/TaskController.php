<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
  // showページへ移動
    public function show($task)
    {
        $memo = Memo::find($task);
        return view('task.show', ['task' => $task]);
    }
}
}
