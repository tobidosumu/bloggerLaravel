@extends('layouts.base')

<!-- Style/title for index page -->
@section('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend_assets/styles/css/index.css') }}">
    <title>{{ 'Blogger | Home' }}</title>
@endsection

<!-- Index page contents -->
@section('content')

    <!-- Index page container/wrapper -->
    <section class="blogContents d-flex justify-content-between">

        <section class="mainContentContainer">   

            <!-- Post template -->
            <div class="postCard border rounded-top rounded-2"> 

                <div class="postHeader">

                    <div class="userAvater">
                        <img src="{{ ('frontend_assets/assets/images/moji.png') }}" alt="">
                        <p class="avaterDetails ms-3"> Firstname Lastname </p>
                    </div>
                    
                    <div class="postInfo">

                        <p>Post time</p>
            
                        <i class="bi bi-three-dots-vertical" data-bs-toggle="modal" data-bs-target="#moreInfoModal"></i>
                        
                        <!-- More info modal goes here -->
            
                    </div>
                </div>
            
                <div class="postPhoto">

                    <!-- Post photo -->
                    <a href="#LinktopostId">
                        <img src="{{ asset('frontend_assets/assets/images/parisOne.jfif') }}" alt="user account">
                    </a>

                    <!-- Post: like, comment, share icons container/wrapper -->
                    <div class="postIconsContainer d-flex justify-content-end">
                        
                        <div class="rightIconsDiv d-flex flex-column justify-content-between align-items-center">
                            
                            <!-- Like icon -->
                            <div class="likes">
                                <i id="heart-icon" class="bi bi-heart" onclick="replaceLikeIcon(this)"></i>
                                <p>221.9k</p>
                            </div>

                            <!-- Comment icon -->
                            <div class="comments">
                                <i class="bi bi-chat-square"></i>
                                <p>1907</p>
                            </div>

                            <!-- Share icon -->
                            <div class="shares">
                                <i class="bi bi-reply"></i>
                                <p>1805</p>
                            </div>

                        </div>

                    </div>

                </div>
            
                <!-- Post category & description container/wrapper -->
                <div class="postTextWrapper">
                    <p class="postCategory"> Category name </p>
                    <p class="postParagraph"> Description </p>
                </div>
            
                <!-- Post comment container/wrapper -->
                <div class="postCommentWrapper d-flex align-items-center align-items-center">

                    <!-- Post smiley wrapper -->
                    <div class="emojiWrapper">
                        <i class="bi bi-emoji-smile"></i>
                    </div>
            
                    <!-- Post comment textarea wrapper -->
                    <div class="commentWrapper">
                        <textarea name="comment" onclick="autoResizeTextarea()" id="expandable-textarea" placeholder="Add a comment..."></textarea>
                    </div>
            
                    <!-- Post button wrapper -->
                    <div class="postBtnWrapper d-flex justify-content-end">
                        <button id="postBtnWrapper" type="submit">Post</button>
                    </div>

                </div>
                
            </div>

        </section>

        <!-- Empty right side section -->
        <section class="rightSideContentContainer border-start"> 
            
        </section>

    </section>

@endsection

<!-- Create post modal button -->
<button type="button" onclick="openPostModal()" class="postBtn border-0">
    <img src="{{ asset('frontend_assets/assets/svg/feather.svg') }}" alt="Click to post">
</button>

<!-- Animated tooltip for Creating post -->
<div id="createPostTooltip" class="createPostTooltip">
    <p>Click to post</p>
</div>

<!-- Black background behind Post Modal -->
<div id="postModalBackground" onclick="closePostModal()" class="postModalBackground"> 

</div>