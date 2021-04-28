<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContentStoreRequest;
use App\Http\Requests\ContentUpdateRequest;
use App\Models\Content;
use Illuminate\Support\Facades\Storage;

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
        $fileName = $this->storeFile($request->file('image'), $data['type']);
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
        return view('backend.contents.show', [
            'content' => $content,
        ]);
    }

    public function update(Content $content, ContentUpdateRequest $request)
    {
        $data = $request->all();
        $fileName = $content->image;
        if ($request->hasFile('image')) {
            $fileName = $this->storeFile($request->file('image'), $data['type']);
            Storage::delete($content->image);
            $content->image = $fileName;
        }

        $content->type = $data['type'];
        $content->is_published = isset($data['is_published']);
        $content->image = $fileName;
        $content->save();

        session()->flash('notify', [
            'message' => ucfirst($data['type']) . ' successfully updated!',
        ]);

        return redirect()->route('backend.contents.');
    }

    public function destroy(Content $content)
    {
        $content->delete();

        session()->flash('notify', [
            'message' => 'Successfully deleted!',
        ]);

        return redirect()->route('backend.contents.');
    }

    private function storeFile($requestFile, $type)
    {
        $fileName = $type . '-' . time() . '.' . $requestFile->getClientOriginalExtension();
        $requestFile->storeAs(
            'contents',
            $fileName
        );

        return $fileName;
    }
}
