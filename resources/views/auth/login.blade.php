@extends('layouts.guest')

{{-- Session Status --}}
<x-auth-session-status class="mb-4" :status="session('status')" />

<!-- Style/title for Login page -->
@section('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend_assets/styles/css/login.css') }}">
    <title>{{ 'Blogger | Login' }}</title>
@endsection

<!-- Login left side content wrapper -->
@section('leftAside')
    <img class="img-fluid" src="{{ ('frontend_assets/assets/svg/loginBgIcon.svg') }}" alt="login image">
    <div class="d-flex justify-content-center align-items-center"><h2>Login to </h2><img class="img-fluid ms-1" src="{{ ('frontend_assets/assets/svg/bloggerLogoWhite.svg') }}" alt="blogger logo"></div>
@endsection

<!-- Login right side content wrapper -->
@section('rightAside')

    <div class="header d-flex justify-content-end align-items-center">

        @section('headerTexts')
            Don't have an account?
        @endsection

        @section('headerLink')
            Login 
        @endsection

        @section('headerLinkTexts')
            login
        @endsection

        <!-- Login form -->
        @section('formContents')

            <h2 class="py-4">Login to your account</h2>
            <form action="POST" method="{{ route('login.custom') }}"> 

                @csrf

                Email Address
                <div>
                    <x-input-label for="email" :value="__('Email')" />
                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                Password -->
                <div class="mt-4">
                    <x-input-label for="password" :value="__('Password')" />
        
                    <x-text-input id="password" class="block mt-1 w-full"
                        type="password"
                        name="password"
                        required autocomplete="current-password" />
        
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                Remember Me
                <div class="flex items-center justify-end mt-2">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                        <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
                    </label>

                    @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif -->
                </div>

                <x-primary-button class="createAcctBtn mt-4">
                    {{ __('Login to account') }}
                </x-primary-button>

                {{-- <div class="createAcctBtn mt-4">
                    <input type="submit" name="loginUser" class="btn rounded-1" value="Login to account">
                    <a href="#" class="mt-2 ms-2">Forgot password?</a>
                </div>

                <div class="createAcctBtn mt-4">
                    <input type="submit" name="addNewUser" class="btn rounded-1" value="Create your account">
                </div> --}}
            
            </form>

        @endsection

    </div>

@endsection







<!-- <x-guest-layout>
    Session Status
    {{-- <x-auth-session-status class="mb-4" :status="session('status')" /> --}}
    {{-- <form method="POST" action="{{ route('login') }}"> --}}
        {{-- @csrf --}}

        Email Address -->
        <!-- <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        Password -->
        <!-- <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                type="password"
                name="password"
                required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div> -->

        <!-- Remember Me -->
        <!-- <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif -->

            <!-- <x-primary-button class="ml-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div> --> 
    <!-- </form> -->
<!-- </x-guest-layout>  -->
