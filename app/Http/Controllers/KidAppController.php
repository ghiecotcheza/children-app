<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Child;
use App\Models\Image;
use App\Models\Content;
use App\Models\ContentType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class KidAppController extends Controller
{
    public function index()
    {
        $children = Child::get();
        return view('index', ['children' => $children]);
    }

    public function show($id)
    {
        $child = Child::find($id);

        return view('child/show', ['child' => $child]);
    }

    public function create($id)
    {
        $child =Child::find($id);
        $content_types = ContentType::get();
        return view('child/create', ['child'=>$child, 'content_types'=>$content_types]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'date' => 'required|date'
        ]);

        $content = Content::create([
            'child_id'=> $request->input('child_id'),
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'date'=> $request->input('date'),
            'location' => $request->input('location'),
            'content_type_id'=> $request->input('content_type_id')
        ]);

        if ($request->hasFile('fileToUpload')) {
            $file = $request->file('fileToUpload');
            $directory = 'childs/' . $request->child_id . '/contents/' . $content->id;
            Storage::makeDirectory($directory);
            $file->storeAs($directory, 'image.jpg');
        }

        return redirect('/child/show/' . $request->input('child_id'));
    }

    public function edit($id)
    {
        $content_row = Content::find($id);
        $content_types = ContentType::get();
        return view('child/edit', ['content_row'=>$content_row, 'content_types'=>$content_types]);
    }

    public function update(Request $request, $id)
    {
            $content = Content::where('id', $id)->update([
                'title'=>$request->input('title'),
                'description' =>$request->input('description'),
                'date' =>$request->input('date'),
                'location'=>$request->input('location'),
                'content_type_id'=>$request->input('content_type_id')
            ]);
            return redirect('/child/show/'.$request->input('child_id'));
    }

    public function destroy($id)
    {
       $content = Content::findOrFail($id)->delete();

        return redirect()->back();
     }
}
