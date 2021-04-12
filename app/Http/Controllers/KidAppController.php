<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Child;
use App\Models\Content;
use App\Models\Image;
use App\Models\User;
use Carbon\Carbon;

class KidAppController extends Controller
{
    public function index()
    {
        $id = Child::get();
        return view('index', ['id' => $id]);
    }

    public function show($id)
    {
        $name = Child::find($id);
        $data = Content::where('child_id', $id)->get();
        // $image =Image::where ('content_id',$content_id)->get();        
        return view('/show', ['name' => $name, 'data' => $data]);
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        //$child_id = Child::find($id);
        $data = Content::create([
            
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'date' => Carbon::parse($request->input('datetime')),
            'location' =>$request->input('location')
        ]);

        dump($data);
        return redirect('/');
    }

    public function edit()
    {
    }

    public function update()
    {
    }

    public function destroy()
    {
    }
}
