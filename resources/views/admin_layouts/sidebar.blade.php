<aside>

    <!-- Logo container/wrapper -->
    <div class="logoContainer p-4">
        <a href="{{ route('posts.index') }}">
            <img src="{{ asset('frontend_assets/assets/svg/bloggerLogoWhite.svg') }}" alt="blogger logo">
        </a>
        <p class="d-flex justify-content-between pt-2">Admin testing<span>Admin user</span></p>
    </div>

    <!-- Nav container/wrapper -->
    <nav class="navMenu mt-2">

        <ul class="d-flex flex-column justify-content-between">
    
            <!-- Home link -->
            <a class="d-flex home" href="{{ url('posts') }}">
                <i class="bi bi-house"></i>
                <span>Home</span>
            </a>

            <!-- Category link -->
            <a class="category" href="{{ url('/category') }}">
                <i class="bi bi-card-list"></i>
                <span>Category</span>
            </a>

            <!-- Shop link -->
            <a class="shop" href="{{ url('/shop') }}">
                <i class="bi bi-shop"></i>
                <span>Seller</span>
            </a>
        
            <!-- Product link -->
            <a class="product" href="{{ url('/product') }}">
                <i class="bi bi-box2"></i>
                <span>Product</span>
            </a>

            <!-- User link -->
            <a class="user" href="{{ url('/user') }}">
                <i class="bi bi-person"></i>
                <span>User</span>
            </a>

            <!-- Report link -->
            <a class="report" href="{{ url('/report') }}">
                <i class="bi bi-flag"></i>
                <span>Report</span>
            </a>
        
        </ul>

    </nav>

</aside>