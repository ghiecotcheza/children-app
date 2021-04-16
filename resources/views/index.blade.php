@extends('child.layout')


@section('content')
    <div class="index">
        <table>
            <tr>
                <td>
                    <img src="{{ asset('images/kenneth.jpeg') }}" alt="kenneth">
                </td>
                <td>
                    <img src="{{ asset('images/daniel.jpeg') }}" alt="daniel">
                </td>
                <td>
                    <img src="{{ asset('images/bryan.jpeg') }}" alt="bryan">
                </td>
            </tr>
            <tr>
                @foreach ($children as $child)
                    <td>
                        <div class="index_name">
                            <h1 class="name">
                                <a href="{{ url('child/show/' . $child->id) }}"> {{ $child->name }}</a>
                            </h1>
                        </div>
                    </td>
                @endforeach
            </tr>
        </table>
    </div>
@endsection
