@extends('pages.layout-pagee')


@section('content')
<link rel="stylesheet" href="/css/login.css">
<!-- <div class="login">
    <div class="container login-container">
        <div class="card">
            <div class="card-body">
                <header class="text-center">
                    <p>Login</p>
                </header>
                <form action="" method="POST" class="main-form text-center">
                    <div class="from-group my-0">
                        <label for="" class="my-0 text-center">
                            <input type="email" class="text-center form-group" placeholder="Email">
                        </label>

                    </div>
                    <div class="from-group my-0">
                        <label for="" class="my-0 text-center">
                            <input type="password" class="text-center form-group" placeholder="Password">
                        </label>
                    </div>
                    <p class="flex-start"><a href="">Forgot Password?</a></p>

                    <label for="" class="check_1">
                        <input type="checkbox" checked>
                        Remember me
                    </label>
                    <div class="form-group">
                        <label for="">
                            <button type="submit" class="form-control btn btn-primary">SIGN IN</button>
                        </label>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div> -->

<div class="login-body ">
    <div class="container login-container">
        <div class="card login-card">
            <div class="card-body">
                <header class="myHead text-center">
                    <p class="login-head my-5">Login</p>
                </header>
                <form action="" class="main-form text-center">
                    <div class="form-group my-5 ">
                        <label for="email" class="">
                            <input type="email" class="login-input" placeholder="Email">
                        </label>
                    </div>
                    <div class="form-group my-3 ">
                        <label for="password" class="">
                            <input type="password" class="login-input" placeholder="Password">
                        </label>
                    </div>
                    <a href="" class="forget my-3"><span>Forgot Password?</span></a>
                    <div>
                        <input type="checkbox" class="" value="lsRememberMe" id="rememberMe">
                         <label for="rememberMe" class="remember">Remember me</label>

                    </div>
                    <div class="form-group my-3">
                        <label>
                            <button type="submit" class="form-control btn btn-c btn-login">SIGN IN
                            </button>
                        </label>
                    </div>
                </form>
            </div>


        </div>

    </div>

</div>




@stop

<!-- <div class="login-body  ">
    <div class="container login-container">
        <div class="card login-card">
            <div class="card-body">
                <header class="myHead text-center">
                    <p class="login-head my-5">Login</p>
                </header>
                <form action="" class="main-form text-center">
                    <div class="form-group my-5 ">
                        <label for="email" class="">
                            <input type="email" class="login-input" placeholder="Email">
                        </label>
                    </div>
                    <div class="form-group my-3 ">
                        <label for="password" class="">
                            <input type="password" class="login-input" placeholder="Password">
                        </label>
                    </div>
                    <a href="" class="forget my-3"><span>Forgot Password?</span></a>
                    <div for="">
                        <input type="checkbox" class="" value="lsRememberMe" id="rememberMe"> <label for="rememberMe" class="remember">Remember me</label>

                    </div>
                    <div class="form-group my-3">
                        <label>
                            <button type="submit" class="form-control btn btn-c btn-login">SIGN IN
                            </button>
                        </label>
                    </div>
                </form>
            </div>


        </div>

    </div>

</div> -->


<!-- 
<div class="login-body  ">
    <div class="container login-container">
        <div class="card login-card">
            <div class="card-body">
                <header class="myHead text-center">
                    <p class="login-head my-5">Login</p>
                </header>
                <x-jet-validation-errors class="mb-4" />

                @if (session('status'))
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ session('status') }}
                </div>
                @endif
                <form method="POST" action="{{ route('login') }}" class="main-form text-center">
                    @csrf
                    <div class="form-group my-5 ">
                        <label for="email" class="" value="{{ __('Email') }}">
                            <input type="email" id="email" class="login-input" placeholder="Email" name="email" :value="old('email')" required autofocus>
                        </label>
                    </div>
                    <div class="form-group my-3 ">
                        <label for="password" class="" value="{{ __('Password') }}">
                            <input type="password" id="password" class="login-input" placeholder="Password" name="password" required autocomplete="current-password">
                        </label>
                    </div>
                    <div class="flex items-center justify-end mt-4">
                        @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                        @endif

                        <x-jet-button class="ml-4">
                            {{ __('Login') }}
                        </x-jet-button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div> -->











