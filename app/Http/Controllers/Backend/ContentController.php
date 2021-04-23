<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Content;

class ContentController extends Controller
{
    public function index()
    {
        $contents = Content::all();

        return view('backend.contents.index', [
            'contents' => $contents,
        ]);
    }

    public function create()
    {
        //
    }

    public function store()
    {
        //
    }

    public function show(Content $content)
    {
        //
    }

    public function update(Content $content)
    {
        //
    }

    public function destroy(Content $content)
    {
        $content->delete();

        return redirect()->route('backend.contents.');
    }
}
