@extends('layouts.app')

@section('content')

<div class="row">
  <div class="column1">
    <p>Some text..</p>
  </div>
  <div class="column2" style="background-color:#f4f4f4;">
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
<div class="container">
    <div class="row justify-content-center">

    <div class="col-8" id="head">
        <div class="text1">
    TT CINEPLEX
      </div>
    <div class="text2">
         Welcome back! Please login to your account.
    </div>
            <div class="card" id="loginn">
                <br>
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="user" class="col-md-4 col-form-label text-md-right">{{ __('Username') }}</label>

                            <div class="col-md-6">
                            <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username">
                            @error('username')
                             <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                        @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>

                                      @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                                </div>
                            </div>
                            </div>

                        <div class="form-group row mb-0">
                                <button type="submit" class="btn btn-dark btn-lg" id="button1">
                                    {{ __('Login') }}
                                </button>

                                <button type="submit" class="btn btn-light btn-lg" id="button2">
                                <a href="http://127.0.0.1:8000/register" class="nav-link">Register</a>
                            </button>
<br>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    
  </div>
</div>


@endsection
