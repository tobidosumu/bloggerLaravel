@extends('layouts.base')

<!-- Style & title for post details page -->
@section('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend_assets/styles/css/postDetails.css') }}">
    <title>{{ 'Blogger | Post Details' }}</title>
@endsection

<!-- Post details page container/wrapper -->
@section('content')

    <section class="blogContents d-flex justify-content-between">

        <!-- Post contents details section -->
        <section class="mainContentContainer border-end"> 

            <!-- Post breadcrumbs navigation -->
            <nav class="my-3">
                <ul class="d-flex">
                    <li><a href="{{ url('/posts') }}">Posts</a></li>
                    <li class="mx-2"><i class="bi bi-chevron-right"></i></li>
                    <li>Post Details</li>
                </ul>
            </nav>
            
            <!-- Post contents inner container -->
            <div class="innerContainer"> 

                <!-- Post image -->
                <div class="postImage">
                    <img class="img-fluid w-100" src="/uploads/{{ $post->image_path }}"> <!-- displays post photo -->   
                    
                    <!-- Post read-time -->
                    <p class="px-1">
                        <i class="bi bi-clock"></i>
                        {{ $post->created_at->diffForHumans() }}
                    </p>
                </div>

                <!-- Post icons container -->
                <div class="rightIconsDiv d-flex flex-column justify-content-between">

                    <!-- Post likes -->
                    <div class="likes">
                        <a>
                            <i id="heart-icon" class="bi bi-heart" onclick="replaceLikeIcon(this)"></i>
                        </a>
                        <p>221.9k</p>
                    </div>
                    
                    <!-- Post comments -->
                    <div class="comments">
                        <a href="#scrollspyComment"><i class="bi bi-chat-square"></i></a>
                        <p>1907</p>
                    </div>
                    
                    <!-- Post shares -->
                    <div class="shares">
                        <a><i class="bi bi-reply"></i></a> 
                        <p>1805</p>
                    </div>

                </div>

                <!-- Post category and read-time container -->
                <div class="categoryTitleContainer"> 
                    <div class="categoryReadTimeContainer d-flex justify-content-between p-2 px-3"> <!-- category and read time div -->
                        <h5>categoryName</h5> 
                        <h6>Min Read</h6>
                    </div>

                    <!-- Post title container -->
                    <div class="titleContainer"> 
                        <h4 class="pt-0 pe-3">{{ $post->title }}</h4>
                    </div> 
                </div>

                <div class="postDescription">
                    <p>{{ $post->description }}</p>
                </div>

                <div id="scrollspyComment" class="commentSection pt-3">
                    
                    <!-- Post details icons -->
                    <div class="iconsWrapper d-flex justify-content-between my-4">
                        <div class="likes d-flex flex-column align-items-center">
                        
                            <i id="heart-icon" class="bi bi-heart" onclick="replaceLikeIcon(this)"></i>

                            <p>221.9k</p>
                        </div>
                        <div class="comments d-flex flex-column align-items-center">
                            <i class="bi bi-chat-square"></i>
                            <p>1907</p>
                        </div>
                        <div class="shares d-flex flex-column align-items-center">
                            <i class="bi bi-reply"></i>
                            <p>1805</p>
                        </div>
                    </div>

                    <!-- User comment on post -->
                    <div class="userComment d-flex mb-4 p-3">
                        <div class="userAvatar">
                            <a href="#">
                                <img src="{{ ('/frontend_assets/assets/images/moji.png') }}" alt="user avatar">
                            </a>
                        </div>
                        <div class="commentContainer">
                            <div class="userStats d-flex align-items-center">
                                <h6>mojisola badmus <span>· 2 hours ago</span></h6>
                            </div>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
                                Reprehenderit eum veritatis illo magni iure, aliquam, quam 
                                doloribus nobis ipsam culpa. 
                            </p>
                        </div>
                    </div>

                    <div class="commentWrapper mt-5">
                        <textarea name="comment" id="expandable-textarea" placeholder="Add a comment..."></textarea>
                    </div>
                    
                </div>
            </div>
                        
        </section>

        <!-- Right side section -->
        <aside class="rightSideContentContainer d-flex flex-column align-items-center pt-4 ps-2"> <!-- products section start here -->
            <a href="#" class="captionCard d-flex align-items-center justify-content-between pe-3 border"><!-- captionCard link -->
                <i class="bi bi-shop-window"></i>
                <h4>Unusual Merch Store</h4>
                <i class="bi bi-arrow-up-right-square"></i>
            </a>           

            <!-- Product card -->
            <div class="productCard mt-3 border">
                <a href="#" class="d-flex flex-column align-items-center p-2"> <!-- product image link -->
                    <div class="productImage">
                        <img class="img-fluid" src="{{ ('/frontend_assets/assets/images/addidas.webp') }}">
                    </div> 
                    <div class="productContent">
                        <h2 class="py-2">ADIDAS VS PACE LIFESTYLE</h2>
                        <h2 class="pb-2">₦ 29,978</h2>
                        <div class="addToCart">
                            <button class="rounded-1" type="submit"><i class="bi bi-bag-plus me-1"></i> Add to cart</button>
                        </div>
                    </div>
                </a>
            </div>

        </aside>

    </section>

@endsection