<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();

        return view('backend.users.index', [
            'users' => $users,
        ]);
    }

    public function view(User $user)
    {
        //
    }

    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->route('backend.users.');
    }
}
