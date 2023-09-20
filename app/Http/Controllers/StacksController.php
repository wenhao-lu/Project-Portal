<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use App\Models\Stack;

class StacksController extends Controller
{

    public function list()
    {
        return view('stacks.list', [
            'stacks' => Stack::all()
        ]);
    }

    public function addForm()
    {

        return view('stacks.add');
    }
    
    public function add()
    {

        $attributes = request()->validate([
            'title' => 'required',
            'url' => 'nullable|url',
        ]);

        $stack = new Stack();
        $stack->title = $attributes['title'];
        $stack->url = $attributes['url'];
        $stack->save();

        return redirect('/console/stacks/list')
            ->with('message', 'Stack has been added!');
    }

    public function editForm(Stack $stack)
    {
        return view('stacks.edit', [
            'stack' => $stack,
        ]);
    }

    public function edit(Stack $stack)
    {

        $attributes = request()->validate([
            'title' => 'required',
            'url' => 'nullable|url',
        ]);

        $stack->title = $attributes['title'];
        $stack->url = $attributes['url'];
        $stack->save();

        return redirect('/console/stacks/list')
            ->with('message', 'Stack has been edited!');
    }

    public function delete(Stack $stack)
    {
        $stack->delete();
        
        return redirect('/console/stacks/list')
            ->with('message', 'Stack has been deleted!');        
    }

}
