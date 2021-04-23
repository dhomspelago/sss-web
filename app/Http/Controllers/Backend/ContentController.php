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
        $data = $request->all();
        $fileName = '';
        if ($request->hasFile('image')) {
            $requestFile = $request->file('image');
            $fileName = $data['type'] . '-' . time() . '.' . $requestFile->getClientOriginalExtension();
            $requestFile->storeAs(
                'contents',
                $fileName
            );
        }

        Content::query()->create([
            'image' => $fileName,
            'type' => $data['type'],
            'is_published' => isset($data['is_published']),
        ]);

        session()->flash('notify', [
            'message' => ucfirst($data['type']) . ' successfully created!',
        ]);

        return redirect()->route('backend.contents.');
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

        session()->flash('notify', [
            'message' => 'Successfully deleted!',
        ]);

        return redirect()->route('backend.contents.');
    }
}
