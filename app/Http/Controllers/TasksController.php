<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use App\Models\Task;


class TasksController extends Controller
{
    public function list()
    {
        // Fetch tasks associated with the authenticated user, lastest first 
        $tasks = Task::where('user_id', Auth::user()->id)
            ->orderBy('created_at', 'desc')
            ->get();
        
        return view('tasks.list', [ 
            'tasks' => $tasks, 
        ]);
    }

    public function addForm()
    {

        return view('tasks.add');
    }

    public function add()
    {

        $attributes = request()->validate([
            'title' => 'required',
        ]);

        $task = new Task();
        $task->title = $attributes['title'];
        $task->completed = false;
        $task->user_id = Auth::user()->id;
        $task->save();

        return redirect('/console/tasks/list')
            ->with('message', 'Task has been added!');
    }

    public function editForm(Task $task)
    {
        return view('tasks.edit', [
            'task' => $task,
        ]);
    }

    public function edit(Request $request, Task $task)
    {

        $attributes = request()->validate([
            'title' => 'required',
            'completed' => 'required',
        ]);

        // Ensure the task belongs to the authenticated user before editing

            $task->title = $attributes['title'];
            $task->completed = $attributes['completed'];
            $task->save();

            return redirect('/console/tasks/list')
            ->with('message', 'Task has been edited!');

    }


    public function delete(Task $task)
    {

        // Ensure the task belongs to the authenticated user before deleting
        
            $task->delete();

            return redirect('/console/tasks/list')
                ->with('message', 'Task has been deleted!');

    }


    public function toggleTaskStatus(Request $request)
    {
        $taskId = $request->input('taskId');
        $isCompleted = $request->input('isCompleted') ? 1 : 0; // Convert boolean to TINYINT (0 or 1)
    
        // Update the task's status in the database if it belongs to the authenticated user
        $task = Task::where('user_id', Auth::user()->id)->findOrFail($taskId);
        
        $task->completed = !$task->completed;
        $task->save();
    
        return response()->json(['message' => 'Task status updated successfully']);
    }






    

}
