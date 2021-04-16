@extends('layout.app')


@section('content')
    <div class="index">
        <div class="nav_link">
            <a class="login" href="">Login</a>
            <a class="register" href="/user/register">Register</a>
        </div>
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
