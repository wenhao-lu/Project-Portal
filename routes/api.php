<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Models\Type;
use App\Models\User;
use App\Models\Project;
use App\Models\Skill;
use App\Models\Education;
use App\Models\Contact;

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

Route::get('/educations', function(){

    $educations = Education::orderBy('school')->get();
    return $educations;

});

Route::get('/skills', function(){

    $skills = Skill::orderBy('name')->get();
    return $skills;

});


Route::middleware('cors')->post('/contacts', function () {
    
});

Route::post('/contacts', function(Request $request) {
    $validatedData = $request->validate([
        'name' => 'required',
        'email' => 'required',
        'msg' => 'required',
    ]);

     // Create a new Contact instance and set the data
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