<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Content;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $announcements = Content::query()->where('type', '=', Content::ANNOUNCEMENT_TYPE)->get();
        $updates = Content::query()->where('type', '=', Content::UPDATE_TYPE)->get();

        return view('home', [
            'announcements' => $announcements,
            'updates' => $updates,
        ]);
    }

    public function profile()
    {
        $user = auth()->user();

        return view('profile', [
            'user' => $user,
        ]);
    }
}
