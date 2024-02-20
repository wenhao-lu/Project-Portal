<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use App\Models\Score;

class ScoresController extends Controller
{
    public function list()
    {
        return view('scores.list', [
            'scores' => Score::all()
        ]);
    }

    public function addForm()
    {

        return view('scores.add');
    }
    
    public function add()
    {

        $attributes = request()->validate([
            'name' => 'required',
            'level' => 'required',
            'points' => 'required',
        ]);

        $score = new Score();
        $score->name = $attributes['name'];
        $score->level = $attributes['level'];
        $score->points = $attributes['points'];
        $score->save();

        return redirect('/console/scores/list')
            ->with('message', 'Score has been added!');
    }

    public function editForm(Score $score)
    {
        return view('scores.edit', [
            'score' => $score,
        ]);
    }

    public function edit(Score $score)
    {

        $attributes = request()->validate([
            'name' => 'required',
            'level' => 'required',
            'points' => 'required',
        ]);

        $score->name = $attributes['name'];
        $score->level = $attributes['level'];
        $score->points = $attributes['points'];
        $score->save();

        return redirect('/console/scores/list')
            ->with('message', 'Score has been edited!');
    }

    public function delete(Score $score)
    {
        $score->delete();
        
        return redirect('/console/scores/list')
            ->with('message', 'Score has been deleted!');        
    }

}
