@extends('layouts.base')

<!-- Style/title for index page -->
@section('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend_assets/styles/css/index.css') }}">
    <title>{{ 'Blogger | Home' }}</title>
@endsection

@section('content')

    <!-- Index page container/wrapper -->
    <section class="blogContents d-flex justify-content-between">

        <section class="mainContentContainer">   

            @foreach ($posts as $post)

                <div class="postCard border rounded-top rounded-2"> 
            
                    <div class="postHeader">
                        
                        <div class="userAvater">
                            <img src="{{ ('frontend_assets/assets/images/moji.png') }}">
                            <p class="avaterDetails ms-3"> {{ $post->user->name }} </p>
                        </div>
                            
                        <div class="postInfo">
            
                            <p>{{ $post->created_at->diffForHumans() }}</p>
            
                            <!-- Link opens infoModal -->
                            <i class="bi bi-three-dots-vertical" data-bs-toggle="modal" data-bs-target="#moreInfoModal"></i>
                            
                            <!-- Three vertical dots on post modal -->
                            @include('posts.infoModal')
            
                        </div>
            
                    </div>
            
                    <div class="postPhoto">
            
                        <!-- URL to post details/show page -->
                        <a href="/posts/{{ $post->slug }}">

                            <!-- Post photo -->
                            <img src="/uploads/{{ $post->image_path }}">
                            
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
                        <p class="postCategory"> {{ $post->category }} </p>
                        <p class="postTitle"> {{ Str::limit($post->title, 66) }} </p>
                        <p class="postParagraph"> {{ Str::limit($post->description, 149) }} </p>
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

            @endforeach


            {{-- <nav aria-label="Page navigation example">
                <ul class="pagination">
                  <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li> --}}
                    {{ $posts->links() }}

                    {{-- <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                  </li>
                </ul>
            </nav> --}}

        </section>

        <!-- Empty right side section -->
        <section class="rightSideContentContainer border-start"> 
            
        </section>

        <!-- Create post Modal -->
        @include('posts.createModal')
        
    </section>

@endsection

<!-- Create post modal button -->
<button type="button" onclick="openPostModal()" class="postBtn border-0">
    <img src="{{ asset('frontend_assets/assets/svg/feather.svg') }}">
</button>


@if (Auth::check())

    <!-- Animated tooltip for authenticated user -->
    <div id="createPostTooltip" class="createPostTooltip">
        <p>Click to post</p>
    </div>

    @else
    
    <!-- Animated tooltip for unauthenticated user -->
    <div id="createPostTooltip" class="createPostTooltip">
        <a href="{{ url('/login') }}">Click to post</a>
    </div>
@endif

<!-- Black background behind Post Modal -->
<div id="blackModalBackground" onclick="closePostModal()" class="blackModalBackground"> 

</div>