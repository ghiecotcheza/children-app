<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Child;
use App\Models\Content;
use App\Models\ContentType;
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
        
        $content = Content::get();
        return view('child/show', ['child' => $child, 'content'=>$content]);
    }

    public function create($id)
    {  
        $child =Child::find($id);   
        $content_types = ContentType::get();
        return view('child/create', ['child'=>$child, 'content_types'=>$content_types]);
    }

    public function store(Request $request)
    {     
        $content = Content::create([
          
        
            'child_id'=>$request->input('child_id'),
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'date' => Carbon::parse($request->input('datetime')),
            'location' =>$request->input('location'),
            'content_type_id'=>$request->input('content_type_id')  
        ]);
       
        
         
        return redirect('/');
    }

    public function edit($id)
    {
        // $content = Content::find($id);
        // return view('child/edit',['content'=>$content]);
    }

    public function update()
    {
    }

    public function destroy()
    {
       
    //     $content ->delete();
    //     return redirect()->back();
     }
}
