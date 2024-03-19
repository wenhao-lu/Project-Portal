<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use App\Models\Work;
use App\Models\Type;
use App\Models\Stack;

class WorksController extends Controller
{

    public function list()
    {
        return view('works.list', [
            'works' => Work::all()
        ]);
    }

    public function addForm()
    {
        return view('works.add',[
            'types'=> Type::all(),
        ]);
    }


    public function add()
    {

        $attributes = request()->validate([
            'title' => 'required',
            'position'=> 'nullable|string',
            'duration' => 'nullable|string',
            'slug' => 'nullable|url',
            'url' => 'nullable|url',
            'subtitle'=> 'nullable|string',
            'content1' => 'nullable|string',
            'content2' => 'nullable|string',
            'content3' => 'nullable|string',
            'type_id' => 'nullable|integer',
            'stack1' => 'nullable|string',
            'stack2' => 'nullable|string',
            'stack3' => 'nullable|string',
            'stack4' => 'nullable|string',
            'stack5' => 'nullable|string',
            'stack6' => 'nullable|string',
            'stack7' => 'nullable|string',
            'stack8' => 'nullable|string',
            'stack9' => 'nullable|string',
            'stack10' => 'nullable|string',
        ]);

        $work = new Work();
        $work->title = $attributes['title'];
        $work->position = $attributes['position'];
        $work->duration = $attributes['duration'];
        $work->slug = $attributes['slug'];
        $work->url = $attributes['url'];
        $work->subtitle = $attributes['subtitle'];
        $work->content1 = $attributes['content1'];
        $work->content2 = $attributes['content2'];
        $work->content3 = $attributes['content3'];
        $work->type_id = $attributes['type_id'];

        $work->stack1 = $attributes['stack1'];
        $work->stack2 = $attributes['stack2'];
        $work->stack3 = $attributes['stack3'];
        $work->stack4 = $attributes['stack4'];
        $work->stack5 = $attributes['stack5'];
        $work->stack6 = $attributes['stack6'];
        $work->stack7 = $attributes['stack7'];
        $work->stack8 = $attributes['stack8'];
        $work->stack9 = $attributes['stack9'];
        $work->stack10 = $attributes['stack10'];

        $work->user_id = Auth::user()->id;
        $work->save();

        return redirect('/console/works/list')
            ->with('message', 'Work has been added!');
    }

    public function editForm(Work $work)
    {
        return view('works.edit', [
            'work' => $work,
            'types'=> Type::all(),
        ]);
    }

    public function edit(Work $work)
    {

        $attributes = request()->validate([
            'title' => 'required',
            'position'=> 'nullable|string',
            'duration' => 'nullable|string',
            'slug' => 'nullable|url',
            'url' => 'nullable|url',
            'subtitle'=> 'nullable|string',
            'content1' => 'nullable|string',
            'content2' => 'nullable|string',
            'content3' => 'nullable|string',
            'type_id' => 'nullable|integer',
            'stack1' => 'nullable|string',
            'stack2' => 'nullable|string',
            'stack3' => 'nullable|string',
            'stack4' => 'nullable|string',
            'stack5' => 'nullable|string',
            'stack6' => 'nullable|string',
            'stack7' => 'nullable|string',
            'stack8' => 'nullable|string',
            'stack9' => 'nullable|string',
            'stack10' => 'nullable|string',
        ]);

        $work->title = $attributes['title'];
        $work->position = $attributes['position'];
        $work->duration = $attributes['duration'];
        $work->slug = $attributes['slug'];
        $work->url = $attributes['url'];
        $work->subtitle = $attributes['subtitle'];
        $work->content1 = $attributes['content1'];
        $work->content2 = $attributes['content2'];
        $work->content3 = $attributes['content3'];
        $work->type_id = $attributes['type_id'];

        $work->stack1 = $attributes['stack1'];
        $work->stack2 = $attributes['stack2'];
        $work->stack3 = $attributes['stack3'];
        $work->stack4 = $attributes['stack4'];
        $work->stack5 = $attributes['stack5'];
        $work->stack6 = $attributes['stack6'];
        $work->stack7 = $attributes['stack7'];
        $work->stack8 = $attributes['stack8'];
        $work->stack9 = $attributes['stack9'];
        $work->stack10 = $attributes['stack10'];

        $work->save();

        return redirect('/console/works/list')
            ->with('message', 'Work has been edited!');
    }

    public function delete(Work $work)
    {

        if($work->image)
        {
            Storage::delete($work->image);
        }
        
        $work->delete();
        
        return redirect('/console/works/list')
            ->with('message', 'Work has been deleted!');        
    }

    public function imageForm(Work $work)
    {
        return view('works.image', [
            'work' => $work,
        ]);
    }

    public function image(Work $work)
    {

        $attributes = request()->validate([
            'image' => 'required|image',
        ]);

        if($work->image)
        {
            Storage::delete($work->image);
        }
        
        $path = request()->file('image')->store('works');

        $work->image = $path;
        $work->save();
        
        return redirect('/console/works/list')
            ->with('message', 'Work image has been edited!');
    }
    
}
