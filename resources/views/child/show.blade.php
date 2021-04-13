@extends('child.layout')

@section('content')
    <div class="main_container">
        <div class="home">
            <a href="{{ url('/') }}">
                Home
            </a>
        </div>
        <div class="image_show">

        </div>
        <div class="name">
            <h1 class="name">
                {{ $child->name }}
            </h1>
        </div>
        <div class="add">
            <a href="{{ url('/child/create/' . $child->id) }}">Add artwork or anecdote here....</a>
        </div>
        <table class="timeline">
            
            @foreach ($child->contents as $content)
                
                    <tr class="title_row">
                        <th>
                            <div class="titles">
                                {{ $content->title }}
                            </div>
                        </th>
                    </tr>

                    <tr>
                        <td class="description">
                            <div>
                                {{ $content->description }}
                            </div>
                        </td>
                        <td class="edit_delete">
                            <div>
                                <p>
                                <a href="{{ url('child/edit/' . $content->id)}}">Edit</a>
                                </p>
                                <p>
                                <a href="{{ url('child/edit/' . $content->id )}}">Delete</a>
                                </p>
                            </div>
                        </td>
                    </tr>
               
            @endforeach
      
        </table>
    </div>
@endsection
