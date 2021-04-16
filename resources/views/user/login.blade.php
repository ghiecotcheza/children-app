@extends('layout.app')

@section('content')

    <h1> Login Page</h1>
    <div class="login_container">
        <form class="login_form" action="/user/register" method="POST" enctype="multipart/form-data">
            <div class="input_row_login">
                <label>E-mail Address</label>
                <input class="register_input" type="text" name="email" placeholder="Email Address">
            </div>
            <div class="input_row_login">
                <label>Password</label>
                <input class="register_input" type="password" name="password" placeholder="Password">
            </div>
            <div>
                <button class="button_login" type="submit">Login</button>
            </div>
        </form>

    </div>


@endsection
