@extends('layout.app')

@section('content')
    <div class="register_container">
        <form class="form_register" action="/user/register" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="input_row">
                <label>{{ __('Name') }}</label>
                <input class="register_input @error('name') is-invalid @enderror" type="text" name="name"
                    value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Name">
            </div>
            @error('name'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <div class="input_row @error('email') is-invalid @enderror">
                <label>{{ __('E-Mail Address') }}</label>
                <input class="register_input " type="text" name="email" value="{{ old('email') }}" required
                    autocomplete="email" placeholder="Email Address">
            </div>
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <div class="input_row">
                <label>{{ __('Password') }}</label>
                <input class="register_input @error('password') is-invalid @enderror" type="password" name="password"
                    required autocomplete="new-password" placeholder="Password">
            </div>
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <div class="input_row">
                <Label>{{ __('Confirm Password') }}</Label>
                <input class="register_input" type="password" name="confirm_password" required autocomplete="new-password" placeholder="Confirm Password">
            </div>
            <div>
                <button class="button_register" type="submit">{{ __('Register') }}</button>
            </div>
        </form>
    </div>
@endsection
