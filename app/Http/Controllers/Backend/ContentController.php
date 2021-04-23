<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContentStoreRequest;
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
        return view('backend.contents.create');
    }

    public function store(ContentStoreRequest $request)
    {
        dd();
        $request->file('image')->storeAs(
            'contents',
            $request->input('type') . '-' . time() . '.' . $request->file('image')->getClientOriginalExtension()
        );
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
