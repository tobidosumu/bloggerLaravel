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
        <section class="dashboard border-bottom">

            <section class="caption">

                <!-- Logged in user dashboard view -->
                <div class="dashboardView d-flex justify-content-center align-items-center"> <!--- Signed in Dashboard -->
                    <div class="userProfile d-flex flex-column align-items-center">
                        <div class="userProfileAvatar d-flex justify-content-between align-items-center">
                            <img src="{{ ('frontend_assets///assets/images/moji.png') }}">
                            <p class="likeCount p-1 pt-2 px-2">
                                <i class="bi bi-heart-fill"></i> 1.4M
                            </p>
                        </div>
                        <p class="mt-2">Username</p>
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

            {{-- @foreach ($posts as $post) --}}

                <div class="postCard border rounded-top rounded-3 pb-1">

                    <!-- Post card -->
                    <div class="postPhoto rounded-top">

                        <div class="upperInfo d-flex justify-content-between px-2">
                            <h5 class="postTime">
                                {{-- {{ $post->created_at->diffForHumans() }} --}}
                            </h5>
                            <div class="moreInfo ms-3"><i class="bi bi-three-dots-vertical"></i></div> 
                        </div>
                        <div class="rightSideInfo d-flex flex-column align-items-end pt-2 pe-2 mb-5">
                            <div class="iconDiv mb-2"><i id="heart-icon" class="bi bi-heart" onclick="replaceLikeIcon(this)"></i></div>    
                        </div>
                        
                        <a href="">
                            <img class="img-fluid rounded-top" src=""> <!-- fetches photo -->
                        </a>

                    </div>

                    <div class="postCategory d-flex justify-content-between py-2 px-2">
                        <p></p> <!-- fetches categoryName -->

                        <p>

                        </p>

                    </div>

                    <div class="postTitle px-2 mt-4">
                        <h6></h6> <!-- fetches title from db -->
                    </div>
                    <div class="postParagraph px-2">
                        <p></p> <!-- fetches description -->
                    </div>
                </div>

            {{-- @endforeach --}}

        </section>

    </section>

@endsection