<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Models\Type;
use App\Models\User;
use App\Models\Project;
use App\Models\Skill;
use App\Models\Education;
use App\Models\Score;
use App\Models\Contact;
use App\Models\Tip;
use App\Models\Task;
use App\Models\Showcase;
use App\Models\Work;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/types', function(){

    $types = Type::orderBy('title')->get();
    return $types;

});

// Project
Route::get('/projects', function(){

    $projects = Project::orderBy('created_at')->get();

    foreach($projects as $key => $project)
    {
        $projects[$key]['user'] = User::where('id', $project['user_id'])->first();
        $projects[$key]['type'] = Type::where('id', $project['type_id'])->first();

        if($project['image'])
        {
            $projects[$key]['image'] = env('APP_URL').'storage/'.$project['image'];
        }
    }

    return $projects;

});

Route::get('/projects/profile/{project?}', function(Project $project){

    $project['user'] = User::where('id', $project['user_id'])->first();
    $project['type'] = Type::where('id', $project['type_id'])->first();

    if($project['image'])
    {
        $project['image'] = env('APP_URL').'storage/'.$project['image'];
    }

    return $project;

});

// Showcase
Route::get('/showcases', function(){

    $showcases = Showcase::orderBy('created_at')->get();

    foreach($showcases as $key => $showcase)
    {
        $showcases[$key]['user'] = User::where('id', $showcase['user_id'])->first();
        $showcases[$key]['type'] = Type::where('id', $showcase['type_id'])->first();

        if($showcase['image'])
        {
            $showcases[$key]['image'] = env('APP_URL').'storage/'.$showcase['image'];
        }
    }

    return $showcases;

});

Route::get('/showcases/profile/{showcase?}', function(Showcase $showcase){

    $showcase['user'] = User::where('id', $showcase['user_id'])->first();
    $showcase['type'] = Type::where('id', $showcase['type_id'])->first();

    if($showcase['image'])
    {
        $showcase['image'] = env('APP_URL').'storage/'.$showcase['image'];
    }

    return $showcase;

});

// Work
Route::get('/works', function(){

    $works = Work::orderBy('created_at')->get();

    foreach($works as $key => $work)
    {
        $works[$key]['user'] = User::where('id', $work['user_id'])->first();
        $works[$key]['type'] = Type::where('id', $work['type_id'])->first();

        if($work['image'])
        {
            $works[$key]['image'] = env('APP_URL').'storage/'.$work['image'];
        }
    }

    return $works;

});

Route::get('/works/profile/{work?}', function(Work $work){

    $work['user'] = User::where('id', $work['user_id'])->first();
    $work['type'] = Type::where('id', $work['type_id'])->first();

    if($work['image'])
    {
        $work['image'] = env('APP_URL').'storage/'.$work['image'];
    }

    return $work;

});

Route::get('/educations', function(){

    $educations = Education::orderBy('school')->get();
    return $educations;

});

Route::get('/skills', function(){

    $skills = Skill::orderBy('name')->get();
    return $skills;

});

Route::get('/tips', function(){

    $tips = Tip::orderBy('title')->get();
    return $tips;

});

Route::get('/tasks', function(){

    $tasks = Task::orderBy('title')->get();
    return $tasks;

});


// Handle API requests for the portfolio contacts 
Route::middleware('cors')->post('/contacts', function () {
    
});

Route::post('/contacts', function(Request $request) {
    $validatedData = $request->validate([
        'name' => 'required',
        'email' => 'required',
        'msg' => 'required',
    ]);

     $contact = new Contact();
     $contact->name = $validatedData['name'];
     $contact->email = $validatedData['email'];
     $contact->msg = $validatedData['msg'];
 
     // Save the contact in the database
     $contact->save();
 
     // Return a response indicating success
     return response()->json(['message' => 'Message sent successfully']);
});

Route::get('/contacts/list', function(){

    $contacts = Contact::orderBy('name')->get();
    return $contacts;

});



// Handle API requests for the HTML Game 
Route::middleware('cors')->post('/scores', function () {
    
});

Route::post('/scores', function(Request $request) {
    $validatedData = $request->validate([
        'name' => 'required',
        'level' => 'required',
        'points' => 'required',
    ]);

     // Create a new Score instance and set the data
     $score = new Score();
     $score->name = $validatedData['name'];
     $score->level = $validatedData['level'];
     $score->points = $validatedData['points'];
 
     // Save the scores in the database
     $score->save();
 
     // Return a response indicating success
     return response()->json(['message' => 'Scores sent successfully']);
});

Route::get('/scores/list', function(){

    $scores = Score::orderBy('points')->get();
    return $scores;

});
