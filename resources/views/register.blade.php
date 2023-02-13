@extends('auth.guestBase')

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
            <form action="" method="head"> 
                <div>
                    <label for="firstName">First name <b class="text-danger">* </b><span class="text-danger"></span></label>
                    <input type="text" name="firstName" placeholder="Your first name">
                </div>
                <div>
                    <label for="lastName">Last name <b class="text-danger">* </b><span class="text-danger"></label>
                    <input type="text" name="lastName" placeholder="Your last name">
                </div>
                <div>
                    <label for="email">Email address <b class="text-danger">* </b><span class="text-danger"></span></label>
                    <input type="text" name="email" placeholder="Your email address">
                </div>
                <div>
                    <label for="password">Password <b class="text-danger">* </b><span class="text-danger"></span></label>
                    <input type="password" name="password" placeholder="Your password">
                </div>
                <div>
                    <label for="confirmPassword">Comfirm password <b class="text-danger">* </b><span class="text-danger"></span></label>
                    <input type="password" name="confirmPassword" placeholder="Confirm password">
                </div>
                <div class="createAcctBtn mt-4"><input type="submit" name="addNewUser" class="btn rounded-1" value="Create your account"></div>
            </form>

        @endsection

    </div>

@endsection
