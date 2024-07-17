<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use App\Models\User;


class UsersController extends Controller
{

    public function list()
    {

        // Check if the authenticated user is an admin
        if (!auth()->user()->isAdmin()) {
            return redirect()->route('console.dashboard')->with('error', 'Unauthorized access.');
        }

        return view('users.list', [
            'users' => User::all()
        ]);

    }

    public function addForm()
    {
        // Check if the authenticated user is an admin
        if (!auth()->user()->isAdmin()) {
            return redirect()->route('console.dashboard')->with('error', 'Unauthorized access.');
        }

        return view('users.add');

    }
    
    public function add()
    {
        // Check if the authenticated user is an admin
        if (!auth()->user()->isAdmin()) {
            return redirect()->route('console.dashboard')->with('error', 'Unauthorized access.');
        }

        $attributes = request()->validate([
            'first' => 'required',
            'last' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
            'role' => 'required',
        ]);

        $user = new User();
        $user->first = $attributes['first'];
        $user->last = $attributes['last'];
        $user->email = $attributes['email'];
        $user->password = $attributes['password'];
        $user->role = $attributes['role'];
        $user->save();

        return redirect('/console/users/list')
            ->with('message', 'User has been added!');

    }

    public function editForm(User $user)
    {
        // Check if the authenticated user is an admin
        if (!auth()->user()->isAdmin()) {
            return redirect()->route('console.dashboard')->with('error', 'Unauthorized access.');
        }

        return view('users.edit', [
            'user' => $user,
        ]);

    }

    public function edit(User $user)
    {
        // Check if the authenticated user is an admin
        if (!auth()->user()->isAdmin()) {
            return redirect()->route('console.dashboard')->with('error', 'Unauthorized access.');
        }

        $attributes = request()->validate([
            'first' => 'required',
            'last' => 'required',
            'email' => [
                'required',
                'email',
                Rule::unique('users')->ignore($user->id),
            ],
            'password' => 'nullable',
            'role' => 'required',
        ]);

        $user->first = $attributes['first'];
        $user->last = $attributes['last'];
        $user->email = $attributes['email'];
        $user->role = $attributes['role'];

        if($attributes['password']) $user->password = $attributes['password'];

        $user->save();

        return redirect('/console/users/list')
            ->with('message', 'User has been edited!');

    }

    public function delete(User $user)
    {
        // Check if the authenticated user is an admin
        if (!auth()->user()->isAdmin()) {
            return redirect()->route('console.dashboard')->with('error', 'Unauthorized access.');
        }

        if($user->id == auth()->user()->id)
        {
            return redirect('/console/users/list')
                ->with('message', 'Cannot delete your own user account!');        
        }
        
        $user->delete();

        return redirect('/console/users/list')
            ->with('message', 'User has been deleted!');                
        
    }
    
}
