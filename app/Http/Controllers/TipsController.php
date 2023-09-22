<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use App\Models\Tip;


class TipsController extends Controller
{
    public function list()
    {
        return view('tips.list', [
            'tips' => Tip::all()
        ]);
    }

    public function addForm()
    {

        return view('tips.add');
    }

    public function add()
    {

        $attributes = request()->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        $tip = new Tip();
        $tip->title = $attributes['title'];
        $tip->content = $attributes['content'];
        $tip->user_id = Auth::user()->id;
        $tip->save();

        return redirect('/console/tips/list')
            ->with('message', 'Tip has been added!');
    }

    public function editForm(Tip $tip)
    {
        return view('tips.edit', [
            'tip' => $tip,
        ]);
    }

    public function edit(Tip $tip)
    {

        $attributes = request()->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        $tip->title = $attributes['title'];
        $tip->content = $attributes['content'];
        $tip->save();

        return redirect('/console/tips/list')
            ->with('message', 'Tip has been edited!');
    }

    public function delete(Tip $tip)
    {

        $tip->delete();
        
        return redirect('/console/tips/list')
            ->with('message', 'Tip has been deleted!');        
    }

    

}
