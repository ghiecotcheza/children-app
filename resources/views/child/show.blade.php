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
            <tbody class="table_row>"
                <tr class="title_row">
                    <th>
                        <div class="titles">
                            {{ $content->title }}
                        </div>
                    </th>
                    <th style="width:200px;">&nbsp;</th>
                    <th>&nbsp;</th>
                </tr>
                <tr>
                    <td class="description">
                        <div>
                            {{ $content->description }}
                        </div>
                    </td>
                    <td><img style="max-width:200px;max-height:100px;" src="{{ $content->image }}"></td>
                    <td class="edit_delete">
                        <div>
                            <p>
                                <a href="{{ url('child/edit/' . $content->id) }}">Edit</a>
                            </p>
                            <p>
                                <a href="{{ url('child/delete/' . $content->id) }}">Delete</a>
                            </p>
                        </div>
                    </td>
                </tr>
            </tbody>
            @endforeach
        </table>
    </div>
@endsection
