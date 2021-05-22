@extends('pages.layout-page')


@section('content')
<link rel="stylesheet" href="/css/login.css">
<div class="login-body">
    <div class="container login-container">
        <div class="row">
 <div class="col-md-12 col-sm-12 col-12">
    <div class="card register-card">
        <div class="card-body">
            <header class="myHead text-center">
                <p class="login-head my-5">Register</p>
            </header>

            <x-jet-validation-errors class="mb-4" />

            <form method="POST" action="{{ route('register') }}" class="main-form">
                @csrf


                <div class="form-group my-4 ">
                    <label for="name" value="{{ __('Name') }}">
                        <input id="name" type="text" class="login-input" placeholder="Name" name="name" :value="old('name')" required autofocus autocomplete="name">
                    </label>
                </div>

                <div class="form-group my-4">
                    <label for="email" value="{{ __('Email') }}">
                        <input id="email" type="email" class="login-input" placeholder="Email" type="email" name="email" :value="old('email')" required>
                    </label>
                </div>
                    <div class="form-group my-4">
                        <label for="mobile" value="{{ __('Mobile') }}">
                            <input id="mobile" type="tel" class="login-input" placeholder="Mobile" type="tel" name="mobile"  required>
                        </label>
                    </div>
                <div class="form-group my-4">
                    <label for="password" value="{{ __('Password') }}">
                        <input id="password" type="password" class="login-input" placeholder="Password" type="password" name="password" required autocomplete="new-password">
                    </label>
                </div>
                <div class="form-group my-4">
                    <label for="password_confirmation" value="{{ __('Confirm Password') }}">
                        <input id="password_confirmation" type="password" class="login-input" placeholder="Confirm Pasword" type="password" name="password_confirmation" required autocomplete="new-password">
                    </label>
                </div>
                @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms" />

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
                @endif
                <div class="">
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                        {{ __('Already registered?') }}
                    </a>
                </div>
                <div class="form-group my-5 text-center">
                    <label class="text-center">
                        <button type="submit" class="form-control text-center btn-c btn-login"> {{ __('Register') }}
                        </button>
                    </label>
                </div>






            </form>
        </div>


    </div>
 </div>
        </div>
       

    </div>

</div>
@stop