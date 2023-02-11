@extends('layouts.base')

<!-- Style/title for dashboard page -->
@section('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend_assets/styles/css/dashboard.css') }}">
    <title>{{ 'Blogger | Dashboard' }}</title>
@endsection

<!-- Dashboard page container/wrapper -->
@section('content')

    <section class="blogContents d-flex justify-content-between">

        <!-- Hero contents -->
        <section class="hero border-bottom">

            <section class="caption">
            
                <!-- Logged out user view -->
                <!-- <div class="notLoggedIndashboardView">
                    <div class="d-flex justify-content-evenly">
                        <a href="./signup.php" class="actionBtn rounded-1">Sign up</a> 
                        <a href="./login.php" class="actionBtn rounded-1">Login</a> 
                    </div>
                </div> -->

                <!-- Logged in user view -->
                <div class="dashboardView d-flex justify-content-center align-items-center"> <!--- Signed in Dashboard -->
                    <div class="userProfile d-flex flex-column align-items-center">
                        <div class="userProfileAvatar d-flex justify-content-between align-items-center">
                            <img src="{{ ('frontend_assets///assets/images/moji.png') }}" alt="user avatar">
                            <p class="likeCount p-1 pt-2 px-2"><i class="bi bi-heart-fill"></i> 1.4M</p>
                        </div>
                        <p class="mt-2">Mojisola Badmus</p>
                        <div class="userProfileInfo d-flex justify-content-between">
                            <p>Followers 214</p>
                            <i class="bi bi-dot"></i>
                            <p>Email: moji@gmail.com</p>
                        </div>
                    </div>
                </div>

            </section>

        </section>

        <!-- Dashboard contents -->
        <section class="mainContentContainer">   

        </section>

    </section>

@endsection