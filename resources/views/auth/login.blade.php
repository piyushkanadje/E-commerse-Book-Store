@extends('pages.layout-page')

@section('content')
<link rel="stylesheet" href="/css/login.css">
<style>
::placeholder{
    color: #100d4b;
}

</style>
<div class="login-body">
    <div class="container login-container">
        <div class="card login-card login-height">
            <div class="card-body">
                <header class="myHead text-center">
                    <p class="login-head my-5">Login</p>
                </header>
                {{-- <x-jet-validation-errors class="mb-4 alert-danger" /> --}}

                @if (session('status'))
                <div class="mb-4 font-medium text-sm alert-danger text-green-600">
                    {{ session('status') }}
                </div>
                @endif
                <form method="POST" action="{{ route('login') }}" class="main-form text-center">
                    @csrf
                    <div class="form-group my-5 ">
                        <label for="email" class="" value="{{ __('Email') }}">
                            <input type="email" id="email" class="login-input" placeholder="Email" name="email" :value="old('email')" required>
                        </label>
                    </div>
                    <div class="form-group my-3 ">
                        <label for="password" class="" value="{{ __('Password') }}">
                            <input type="password" id="password" class="login-input" placeholder="Password" name="password" required autocomplete="current-password">
                        </label>
                    </div>
                    @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}" class="forget my-3"><span>{{ __('Forgot your password?') }}</span></a>
                    @endif
                    <div class="input-remember ml-4">
                        <label for="remember_me" class="flex items-left ">
                            <input type="checkbox" class="remember" id="remember_me" name="remember">
                            <span class="ml-2 remember">{{ __('Remember me') }}</span>
                        </label>
                    </div>
                    <div>
                        <a href="/signup">LOGIN WITH OTP</a>
                    </div>
                    <div class="form-group my-3">
                        <label>
                            <button type="submit" class="form-control btn  btn-c btn-login"> {{ __('SIGN IN') }}
                            </button>
                        </label>
                    </div>


                </form>
            </div>
        </div>
    </div>
</div>

@stop