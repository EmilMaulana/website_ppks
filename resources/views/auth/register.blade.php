@extends('layouts.register')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card mt-5 shadow rounded-4 border-0" style="border-radius: 20px">
                <div class="card-header text-center color-1">{{ __('') }}
                    <a href="/"><img src="{{ asset('assets/img/satgas-ppks.png') }}" alt="" style="width: 150px"></a>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="row justify-content-center">
                            <div class="col-md-11 mb-3">
                                <label for="name" class="form-label">{{ __('Username') }}</label>
                                <input id="name" type="username" class="form-control br @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-md-11 mb-3">
                                <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email') }}</label>
                                <input id="email" type="email" class="form-control br @error('email') is-invalid @enderror" name="email" required autocomplete="current-email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-md-11 mb-3">
                                <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>
                                <input id="password" type="password" class="form-control br @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        {{-- <div class="row justify-content-center mb-3">
                            <div class="col-md-11">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div> --}}
                        <div class="row mx-3">
                                <button type="submit" class="btn btn color-1 text-white py-2 br">
                                    {{ __('Sign in') }}
                                </button>
                                <small class="text-center my-3">Or sign up with</small>
                                <a href="{{ route('login') }}" class="btn btn color-1 text-white py-2 br"><i class="fa-brands fa-google"></i> Sign up with Google</a>
                                {{-- <a href="{{ route('login.google') }}" class="btn btn-success text-white py-2 br"><i class="fa-brands fa-google"></i> Sign up with Google</a> --}}
                                
                                {{-- @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif --}}
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
