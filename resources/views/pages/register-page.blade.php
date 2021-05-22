@extends('pages.layout-page')


@section('content')
<div class="login-body">
    <div class="container login-container">
        <div class="card register-card">
            <div class="card-body">
                <header class="myHead text-center">
                    <p class="login-head my-5">Register</p>
                </header>
                <form action="" class="main-form">


                    <div class="form-group my-5 ">
                        <label for="username" class="">
                            <input type="text" class="login-input" placeholder="Username">
                        </label>
                    </div>

                    <div class="form-group my-5 ">
                        <label for="email" class="">
                            <input type="email" class="login-input" placeholder="Email">
                        </label>
                    </div>
                    <div class="form-group my-5 ">
                        <label for="mobile" class="">
                            <input type="tel" name="mobile" class="login-input" placeholder="Enter Mobile Number">
                        </label>
                    </div>
                    <div class="form-group my-5 ">
                        <label for="password" class="">
                            <input type="password" class="login-input" placeholder="Password">
                        </label>
                    </div>
                    <div class="form-group my-5 ">
                        <label for="confirm-password" class="">
                            <input type="password" class="login-input" placeholder="Confirm Pasword">
                        </label>
                    </div>

                    <div class="form-group my-5 text-center">
                        <label class="text-center">
                            <button type="submit" class="form-control text-center btn-c btn-login">SIGN UP
                            </button>
                        </label>
                    </div>
                </form>
            </div>


        </div>

    </div>

</div>
<!-- <div class="login-body">
    <div class="container login-container">
        <div class="card register-card">
            <div class="card-body">
                <header class="myHead text-center">
                    <p class="login-head my-5">Register</p>
                </header>

                <x-jet-validation-errors class="mb-4" />

                <form method="POST" action="{{ route('register') }}" class="main-form">
                    @csrf


                    <div class="form-group my-5 ">
                        <label for="name" value="{{ __('Name') }}">
                            <input id="name" type="text" class="login-input" placeholder="Username" name="name" :value="old('name')" required autofocus autocomplete="name">
                        </label>
                    </div>

                    <div class="form-group my-5 ">
                        <label for="email" value="{{ __('Email') }}">
                            <input id="email" type="email" class="login-input" placeholder="Email" type="email" name="email" :value="old('email')" required>
                        </label>
                    </div>
                    <div class="form-group my-5 ">
                        <label for="password" value="{{ __('Password') }}">
                            <input id="password" type="password" class="login-input" placeholder="Password" type="password" name="password" required autocomplete="new-password">
                        </label>
                    </div>
                    <div class="form-group my-5 ">
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

                    <div class="flex items-center justify-end mt-4">
                        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                            {{ __('Already registered?') }}
                        </a>

                        <x-jet-button class="ml-4">
                            {{ __('Register') }}
                        </x-jet-button>
                    </div>

                </form>
            </div>


        </div>

    </div>

</div> -->


@stop


<!-- <x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-jet-label for="name" value="{{ __('Name') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms"/>

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

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout> -->

<!-- <div class="login-body">
    <div class="container login-container">
        <div class="card register-card">
            <div class="card-body">
                <header class="myHead text-center">
                    <p class="login-head my-5">Register</p>
                </header>

                <x-jet-validation-errors class="mb-4" />
                <form class="main-form" method="POST" action="{{ route('register') }}">


                    <div class="form-group my-5 ">
                        <label for="name" value="{{ __('Name') }}">
                            <input type="text" id="name" class="login-input" placeholder="Username" name="name" :value="old('name')" required autofocus autocomplete="name">
                        </label>
                    </div>

                    <div class="form-group my-5 ">
                        <label for="email" value="{{ __('Email') }}">
                            <input id="email" type="email" class="login-input" placeholder="Email" name="email" :value="old('email')" required>
                        </label>
                    </div>
                    <div class="form-group my-5 ">
                        <label for="password" value="{{ __('Password') }}">
                            <input type="password" id="password" class="login-input" placeholder="Password" name="password" required autocomplete="new-password">
                        </label>
                    </div>
                    <div class="form-group my-5 ">
                        <label for="password_confirmation" value="{{ __('Confirm Password') }}">
                            <input id="password_confirmation" type="password" class="login-input" placeholder="Confirm Pasword" name="password_confirmation" required autocomplete="new-password">
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

                    <div class="flex items-center justify-start mt-4">
                        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                            {{ __('Already registered?') }}
                        </a>

                        <div class="form-group my-5 text-center">
                            <label class="text-center">
                                <button  class="form-control text-center btn-c btn-login">   {{ __('Register') }}
                                </button>
                            </label>
                        </div>
                </form>
            </div>


        </div>

    </div>

</div> -->
