<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{

    public function index()
    {
        $users=User::all();

        return view ('users.index', ['users'=>$users]);
    }

    public function show(string $id)
    {
        $user = User::query()
            ->findOrFail($id);

        return view('users.show', ['user'=>$user]);
    }
}
