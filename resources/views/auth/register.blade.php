@extends('auth.guest')

<!-- Style/title for index page -->
@section('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend_assets/styles/css/signup.css') }}">
    <title>{{ 'Blogger | Register' }}</title>
@endsection

<!-- Signup left side content wrapper -->
@section('leftAside')
    <img class="img-fluid" src="{{ ('frontend_assets/assets/svg/signupBgIcon.svg') }}" alt="Registration image">
    <div class="d-flex justify-content-center align-items-center"><h2>Welcome to </h2><img class="img-fluid ms-1" src="{{ ('frontend_assets/assets/svg/bloggerLogoWhite.svg') }}" alt="blogger logo"></div>
@endsection

<!-- Register right side content wrapper -->
@section('rightAside')

    <div class="header d-flex justify-content-end align-items-center">

        @section('headerTexts')
            Already have an account?
        @endsection

        @section('headerLink')
            {{ url('/login') }}
        @endsection

        @section('headerLinkTexts')
            Login
        @endsection

        <!-- User registration form -->
        @section('formContents')

            <h2 class="py-4">Create your free account</h2>
            <form action="{{ route('register.custom') }}" method="POST"> 

                @csrf

                <!-- Name input -->
                <div class="inputContentsWrapper">

                    <label for="name">
                        Name <b class="text-danger">*</b>
                        @if ($errors->has('name'))
                            <span class="text-danger">{{ $errors->first('name') }}</span>
                        @endif
                    </label>

                    <input type="text" name="name" placeholder="Enter name">
                
                </div>
                
                <!-- Email input -->
                <div class="inputContentsWrapper">

                    <label for="email">
                        Email address <b class="text-danger">*</b>
                        @if ($errors->has('email'))
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                        @endif
                    </label>

                    <input type="text" name="email" placeholder="Enter email address">

                </div>
                
                <!-- Password input -->
                <div class="inputContentsWrapper">

                    <label for="password">
                        Password <b class="text-danger">*</b>
                        @if ($errors->has('password'))
                            <span class="text-danger">{{ $errors->first('password') }}</span>
                        @endif
                    </label>

                    <input type="password" name="password" placeholder="Enter password">

                </div>
                
                <!-- Comfirm Password input -->
                <div class="inputContentsWrapper">
                    <label for="confirmPassword">
                        Comfirm password <b class="text-danger">*</b>
                        @if ($errors->has('confirmPassword'))
                            <span class="text-danger">{{ $errors->first('confirmPassword') }}</span>
                        @endif
                    </label>

                    <input type="password" name="confirmPassword" placeholder="Confirm password">

                </div>
                
                <!-- Submit button -->
                <div class="createAcctBtn mt-4">
                    <button type="submit" class="btn rounded-1">Create your account</button>
                </div>
                
            </form>

        @endsection

    </div>

@endsection
