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
        $children = Child::get();
        return view('index', ['children' => $children]);
    }

    public function show($id)
    {
        $child = Child::find($id);
        return view('/show', ['child' => $child]);
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        //$child_id = Child::find($id);
        $content = Content::create([

            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'date' => Carbon::parse($request->input('datetime')),
            'location' =>$request->input('location')
        ]);

        dump($content);
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
