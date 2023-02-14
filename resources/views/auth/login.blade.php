@extends('auth.guest')

<!-- Login style and title for -->
@section('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend_assets/styles/css/login.css') }}">
    <title>{{ 'Blogger | Login' }}</title>
@endsection

<!-- Login left side content wrapper -->
@section('leftAside')
    <!-- Login left svg image -->
    <img class="img-fluid" src="{{ ('frontend_assets/assets/svg/loginBgIcon.svg') }}" alt="login image">

    <!-- Login left side footer wrapper -->
    <div class="d-flex justify-content-center align-items-center">
        <h2>Login to </h2>
        <img class="img-fluid ms-1" src="{{ ('frontend_assets/assets/svg/bloggerLogoWhite.svg') }}" alt="blogger logo">
    </div>
@endsection

<!-- Login right side content(Login form) wrapper -->
@section('rightAside')

    <div class="header d-flex justify-content-end align-items-center">

        @section('headerTexts')
            Don't have an account?
        @endsection

        @section('headerLink')
            register 
        @endsection

        @section('headerLinkTexts')
            Register
        @endsection

        <!-- Login form -->
        @section('formContents')

            <h2 class="py-4">Login to your account</h2>
            <form action="{{ route('login.custom') }}" method="POST"> 

                @csrf

                <div class="inputContentsWrapper"> <!-- Email address input -->

                    <label for="email">
                        Email address <b class="text-danger">*</b>
                        @if ($errors->has('email'))
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                        @endif
                    </label>

                    <input type="text" name="email" placeholder="Enter email address" autofocus>

                </div>

                <div class="inputContentsWrapper"> <!-- Password input -->

                    <label for="password">
                        Password address <b class="text-danger">*</b>
                        @if ($errors->has('password'))
                            <span class="text-danger">{{ $errors->first('password') }}</span>
                        @endif
                    </label>

                    <input type="password" name="password" placeholder="Enter password" autofocus>

                </div>

                <!-- Submit container -->
                <div class="createAcctBtn mt-4">
                    
                    <!-- Submit button -->
                    <button type="submit" class="btn rounded-1">Login to account</button>

                    <!-- Divs below submit button container -->
                    <div class="belowSubmitBtns mt-2 d-flex justify-content-between">
                        
                        <!-- Remember Me checkbox -->
                        <div class="checkbox"> 
                            <label>
                                <input type="checkbox" name="remember"> Remember me
                            </label>
                        </div>

                        <!-- Forgot password -->
                        <div class=""> 
                            <a href="#" class="mt-2 ms-2">Forgot password?</a>
                        </div>

                    </div>

                </div>
            
            </form>

        @endsection

    </div>

@endsection