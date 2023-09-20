<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use App\Models\Education;

class EducationsController extends Controller
{
    public function list()
    {
        return view('educations.list', [
            'educations' => Education::all()
        ]);
    }

    public function addForm()
    {

        return view('educations.add');
    }
    
    public function add()
    {

        $attributes = request()->validate([
            'degree' => 'required',
            'major' => 'required',
            'school' => 'required',
            'date' => 'required',
            'course' => 'required',
        ]);

        $education = new Education();
        $education->degree = $attributes['degree'];
        $education->major = $attributes['major'];
        $education->school = $attributes['school'];
        $education->date = $attributes['date'];
        $education->course = $attributes['course'];
        $education->save();

        return redirect('/console/educations/list')
            ->with('message', 'Education has been added!');
    }

    public function editForm(Education $education)
    {
        return view('educations.edit', [
            'education' => $education,
        ]);
    }

    public function edit(Education $education)
    {

        $attributes = request()->validate([
            'degree' => 'required',
            'major' => 'required',
            'school' => 'required',
            'date' => 'required',
            'course' => 'required',
        ]);

        $education->degree = $attributes['degree'];
        $education->major = $attributes['major'];
        $education->school = $attributes['school'];
        $education->date = $attributes['date'];
        $education->course = $attributes['course'];
        $education->save();

        return redirect('/console/educations/list')
            ->with('message', 'Education has been edited!');
    }

    public function delete(Education $education)
    {
        $education->delete();
        
        return redirect('/console/educations/list')
            ->with('message', 'Education has been deleted!');        
    }
}
