<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use App\Models\Showcase;
use App\Models\Type;
use App\Models\Stack;

class ShowcasesController extends Controller
{

    public function list()
    {
        return view('showcases.list', [
            'showcases' => Showcase::all()
        ]);
    }

    public function addForm()
    {
        return view('showcases.add',[
            'types'=> Type::all(),
        ]);
    }


    public function add()
    {

        $attributes = request()->validate([
            'title' => 'required',
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

        $showcase = new Showcase();
        $showcase->title = $attributes['title'];
        $showcase->slug = $attributes['slug'];
        $showcase->url = $attributes['url'];
        $showcase->subtitle = $attributes['subtitle'];
        $showcase->content1 = $attributes['content1'];
        $showcase->content2 = $attributes['content2'];
        $showcase->content3 = $attributes['content3'];
        $showcase->type_id = $attributes['type_id'];

        $showcase->stack1 = $attributes['stack1'];
        $showcase->stack2 = $attributes['stack2'];
        $showcase->stack3 = $attributes['stack3'];
        $showcase->stack4 = $attributes['stack4'];
        $showcase->stack5 = $attributes['stack5'];
        $showcase->stack6 = $attributes['stack6'];
        $showcase->stack7 = $attributes['stack7'];
        $showcase->stack8 = $attributes['stack8'];
        $showcase->stack9 = $attributes['stack9'];
        $showcase->stack10 = $attributes['stack10'];

        $showcase->user_id = Auth::user()->id;
        $showcase->save();

        return redirect('/console/showcases/list')
            ->with('message', 'Showcase has been added!');
    }

    public function editForm(Showcase $showcase)
    {
        return view('showcases.edit', [
            'showcase' => $showcase,
            'types'=> Type::all(),
        ]);
    }

    public function edit(Showcase $showcase)
    {

        $attributes = request()->validate([
            'title' => 'required',
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

        $showcase->title = $attributes['title'];
        $showcase->slug = $attributes['slug'];
        $showcase->url = $attributes['url'];
        $showcase->subtitle = $attributes['subtitle'];
        $showcase->content1 = $attributes['content1'];
        $showcase->content2 = $attributes['content2'];
        $showcase->content3 = $attributes['content3'];
        $showcase->type_id = $attributes['type_id'];

        $showcase->stack1 = $attributes['stack1'];
        $showcase->stack2 = $attributes['stack2'];
        $showcase->stack3 = $attributes['stack3'];
        $showcase->stack4 = $attributes['stack4'];
        $showcase->stack5 = $attributes['stack5'];
        $showcase->stack6 = $attributes['stack6'];
        $showcase->stack7 = $attributes['stack7'];
        $showcase->stack8 = $attributes['stack8'];
        $showcase->stack9 = $attributes['stack9'];
        $showcase->stack10 = $attributes['stack10'];

        $showcase->save();

        return redirect('/console/showcases/list')
            ->with('message', 'Showcase has been edited!');
    }

    public function delete(Showcase $showcase)
    {

        if($showcase->image)
        {
            Storage::delete($showcase->image);
        }
        
        $showcase->delete();
        
        return redirect('/console/showcases/list')
            ->with('message', 'Showcase has been deleted!');        
    }

    public function imageForm(Showcase $showcase)
    {
        return view('showcases.image', [
            'showcase' => $showcase,
        ]);
    }

    public function image(Showcase $showcase)
    {

        $attributes = request()->validate([
            'image' => 'required|image',
        ]);

        if($showcase->image)
        {
            Storage::delete($showcase->image);
        }
        
        $path = request()->file('image')->store('showcases');

        $showcase->image = $path;
        $showcase->save();
        
        return redirect('/console/showcases/list')
            ->with('message', 'Showcase image has been edited!');
    }
    
}
