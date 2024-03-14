<?php

use App\Models\Project;
use App\Http\Controllers\ConsoleController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\TypesController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\SkillsController;
use App\Http\Controllers\EducationsController;
use App\Http\Controllers\ScoresController;
use App\Http\Controllers\StacksController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\TipsController;
use App\Http\Controllers\TasksController;
use App\Http\Controllers\PortfolioCMSController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes    
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome', [
        'projects' => Project::all(),
    ]);
});

Route::get('/project/{project:slug}', function (Project $project) {
    return view('project', [
        'project' => $project,
    ]);
})->where('project', '[A-z\-]+');

Route::get('/console/logout', [ConsoleController::class, 'logout'])->middleware('auth');
Route::get('/console/login', [ConsoleController::class, 'loginForm'])->middleware('guest')->name('console.login');
Route::post('/console/login', [ConsoleController::class, 'login'])->middleware('guest');
Route::get('/console/dashboard', [ConsoleController::class, 'dashboard'])->middleware('auth');

Route::get('/console/portfolioCMS/index', [PortfolioCMSController::class, 'index'])->middleware('auth');

Route::get('/console/projects/list', [ProjectsController::class, 'list'])->middleware('auth');
Route::get('/console/projects/add', [ProjectsController::class, 'addForm'])->middleware('auth');
Route::post('/console/projects/add', [ProjectsController::class, 'add'])->middleware('auth');
Route::get('/console/projects/edit/{project:id}', [ProjectsController::class, 'editForm'])->where('project', '[0-9]+')->middleware('auth');
Route::post('/console/projects/edit/{project:id}', [ProjectsController::class, 'edit'])->where('project', '[0-9]+')->middleware('auth');
Route::get('/console/projects/delete/{project:id}', [ProjectsController::class, 'delete'])->where('project', '[0-9]+')->middleware('auth');
Route::get('/console/projects/image/{project:id}', [ProjectsController::class, 'imageForm'])->where('project', '[0-9]+')->middleware('auth');
Route::post('/console/projects/image/{project:id}', [ProjectsController::class, 'image'])->where('project', '[0-9]+')->middleware('auth');

Route::get('/console/users/list', [UsersController::class, 'list'])->middleware('auth');
Route::get('/console/users/add', [UsersController::class, 'addForm'])->middleware('auth');
Route::post('/console/users/add', [UsersController::class, 'add'])->middleware('auth');
Route::get('/console/users/edit/{user:id}', [UsersController::class, 'editForm'])->where('user', '[0-9]+')->middleware('auth');
Route::post('/console/users/edit/{user:id}', [UsersController::class, 'edit'])->where('user', '[0-9]+')->middleware('auth');
Route::get('/console/users/delete/{user:id}', [UsersController::class, 'delete'])->where('user', '[0-9]+')->middleware('auth');

Route::get('/console/types/list', [TypesController::class, 'list'])->middleware('auth');
Route::get('/console/types/add', [TypesController::class, 'addForm'])->middleware('auth');
Route::post('/console/types/add', [TypesController::class, 'add'])->middleware('auth');
Route::get('/console/types/edit/{type:id}', [TypesController::class, 'editForm'])->where('type', '[0-9]+')->middleware('auth');
Route::post('/console/types/edit/{type:id}', [TypesController::class, 'edit'])->where('type', '[0-9]+')->middleware('auth');
Route::get('/console/types/delete/{type:id}', [TypesController::class, 'delete'])->where('type', '[0-9]+')->middleware('auth');

Route::get('/console/skills/list', [SkillsController::class, 'list'])->middleware('auth');
Route::get('/console/skills/add', [SkillsController::class, 'addForm'])->middleware('auth');
Route::post('/console/skills/add', [SkillsController::class, 'add'])->middleware('auth');
Route::get('/console/skills/edit/{skill:id}', [SkillsController::class, 'editForm'])->where('skill', '[0-9]+')->middleware('auth');
Route::post('/console/skills/edit/{skill:id}', [SkillsController::class, 'edit'])->where('skill', '[0-9]+')->middleware('auth');
Route::get('/console/skills/delete/{skill:id}', [SkillsController::class, 'delete'])->where('skill', '[0-9]+')->middleware('auth');
Route::get('/console/skills/image/{skill:id}', [SkillsController::class, 'imageForm'])->where('skill', '[0-9]+')->middleware('auth');
Route::post('/console/skills/image/{skill:id}', [SkillsController::class, 'image'])->where('skill', '[0-9]+')->middleware('auth');

Route::get('/console/educations/list', [EducationsController::class, 'list'])->middleware('auth');
Route::get('/console/educations/add', [EducationsController::class, 'addForm'])->middleware('auth');
Route::post('/console/educations/add', [EducationsController::class, 'add'])->middleware('auth');
Route::get('/console/educations/edit/{education:id}', [EducationsController::class, 'editForm'])->where('education', '[0-9]+')->middleware('auth');
Route::post('/console/educations/edit/{education:id}', [EducationsController::class, 'edit'])->where('education', '[0-9]+')->middleware('auth');
Route::get('/console/educations/delete/{education:id}', [EducationsController::class, 'delete'])->where('education', '[0-9]+')->middleware('auth');

Route::get('/console/stacks/list', [StacksController::class, 'list'])->middleware('auth');
Route::get('/console/stacks/add', [StacksController::class, 'addForm'])->middleware('auth');
Route::post('/console/stacks/add', [StacksController::class, 'add'])->middleware('auth');
Route::get('/console/stacks/edit/{stack:id}', [StacksController::class, 'editForm'])->where('stack', '[0-9]+')->middleware('auth');
Route::post('/console/stacks/edit/{stack:id}', [StacksController::class, 'edit'])->where('stack', '[0-9]+')->middleware('auth');
Route::get('/console/stacks/delete/{stack:id}', [StacksController::class, 'delete'])->where('stack', '[0-9]+')->middleware('auth');

Route::get('/console/contacts/list', [ContactsController::class, 'list'])->middleware('auth');
Route::get('/console/contacts/add', [ContactsController::class, 'addForm'])->middleware('auth');
Route::post('/console/contacts/add', [ContactsController::class, 'add'])->middleware('auth');
Route::get('/console/contacts/edit/{contact:id}', [ContactsController::class, 'editForm'])->where('contact', '[0-9]+')->middleware('auth');
Route::post('/console/contacts/edit/{contact:id}', [ContactsController::class, 'edit'])->where('contact', '[0-9]+')->middleware('auth');
Route::get('/console/contacts/delete/{contact:id}', [ContactsController::class, 'delete'])->where('contact', '[0-9]+')->middleware('auth');

Route::get('/console/tips/list', [TipsController::class, 'list'])->middleware('auth');
Route::get('/console/tips/add', [TipsController::class, 'addForm'])->middleware('auth');
Route::post('/console/tips/add', [TipsController::class, 'add'])->middleware('auth');
Route::get('/console/tips/edit/{tip:id}', [TipsController::class, 'editForm'])->where('tip', '[0-9]+')->middleware('auth');
Route::post('/console/tips/edit/{tip:id}', [TipsController::class, 'edit'])->where('tip', '[0-9]+')->middleware('auth');
Route::get('/console/tips/delete/{tip:id}', [TipsController::class, 'delete'])->where('tip', '[0-9]+')->middleware('auth');

Route::get('/console/tasks/list', [TasksController::class, 'list'])->middleware('auth');
Route::get('/console/tasks/add', [TasksController::class, 'addForm'])->middleware('auth');
Route::post('/console/tasks/add', [TasksController::class, 'add'])->middleware('auth');
Route::get('/console/tasks/edit/{task:id}', [TasksController::class, 'editForm'])->where('task', '[0-9]+')->middleware('auth');
Route::post('/console/tasks/edit/{task:id}', [TasksController::class, 'edit'])->where('task', '[0-9]+')->middleware('auth');
Route::get('/console/tasks/delete/{task:id}', [TasksController::class, 'delete'])->where('task', '[0-9]+')->middleware('auth');
Route::post('/console/tasks/toggle', [TasksController::class, 'toggleTaskStatus'])->where('task', '[0-9]+')->middleware('auth');

Route::get('/console/scores/list', [ScoresController::class, 'list'])->middleware('auth');
Route::get('/console/scores/add', [ScoresController::class, 'addForm'])->middleware('auth');
Route::post('/console/scores/add', [ScoresController::class, 'add'])->middleware('auth');
Route::get('/console/scores/edit/{score:id}', [ScoresController::class, 'editForm'])->where('score', '[0-9]+')->middleware('auth');
Route::post('/console/scores/edit/{score:id}', [ScoresController::class, 'edit'])->where('score', '[0-9]+')->middleware('auth');
Route::get('/console/scores/delete/{score:id}', [ScoresController::class, 'delete'])->where('score', '[0-9]+')->middleware('auth');