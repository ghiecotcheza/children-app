@extends('layout')

@section('content')
    <div class="main_container">
        <div class="home">
            <a href="{{ url('/') }}">
                Home
            </a>
        </div>
        <div class="name">
            <h1 class="name">
                {{ $child->name }}
            </h1>
        </div>
        <div>

            <a href="{{ url('/create') }}">Add Artwork &rarr;</a>
        </div>
        @foreach ($child->contents as $content)
            <table class="timeline">
                <tr>
                    <th>
                        <div class="titles">
                            {{ $content->title }}
                        </div>
                    </th>
                </tr>
                <tr>
                    <td>
                        <div>
                            {{ $content->description }}
                        </div>
                    </td>
                </tr>
            </table>
            <hr>
        @endforeach
    </div>
@endsection
