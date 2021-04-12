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
                {{ $name->name }}
            </h1>
        </div>
        <div>

            <a href="{{ url('/create') }}">Add Artwork &rarr;</a>
        </div>
        @foreach ($data as $data)
            <table class="timeline">
                <tr>
                    <th>
                        <div class="titles">
                            {{ $data->title }}
                        </div>
                    </th>
                </tr>
                <tr>
                    <td>
                        <div>
                            {{ $data->description }}
                        </div>
                    </td>
                </tr>
            </table>
            <hr>
        @endforeach
    </div>
@endsection
