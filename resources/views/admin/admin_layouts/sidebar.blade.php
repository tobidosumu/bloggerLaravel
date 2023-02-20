<aside class="sidebarContainer">

    <!-- Logo container/wrapper -->
    <div class="logoContainer pt-2 ps-4 pb-5">
        <a href="{{ route('posts.index') }}">
            <img src="{{ asset('frontend_assets/assets/svg/bloggerLogoBlack.svg') }}" alt="blogger logo">
        </a>
    </div>

    <!-- Nav container/wrapper -->
    <nav class="navMenu mt-2">

        <ul class="d-flex flex-column justify-content-between">

            <!-- Home link -->
            <a class="d-flex align-items-center home" href="{{ url('/admin/dashboard') }}">
                <i class="bi bi-house"></i>
                <span>Home</span>
            </a>

            <!-- Category link -->
            <a class="d-flex align-items-center category" href="{{ url('/admin/category') }}">
                <i class="bi bi-card-list"></i>
                <span>Category</span>
            </a>

            <!-- Shop link -->
            <a class="d-flex align-items-center seller" href="{{ url('/admin/seller') }}">
                <i class="bi bi-shop"></i>
                <span>Seller</span>
            </a>
        
            <!-- Product link -->
            <a class="d-flex align-items-center product" href="{{ url('/admin/product') }}">
                <i class="bi bi-box2"></i>
                <span>Product</span>
            </a>

            <!-- User link -->
            <a class="d-flex align-items-center blogger" href="{{ url('/admin/user') }}">
                <i class="bi bi-person"></i>
                <span>User</span>
            </a>

            <!-- Report link -->
            <a class="d-flex align-items-center report" href="{{ url('/admin/report') }}">
                <i class="bi bi-flag"></i>
                <span>Report</span>
            </a>
        
        </ul>

        <p class="logout d-flex justify-content-between align-items-center border-top px-4 py-4 mt-5">
            Logout
            <a href="#">
                <i class="bi bi-toggle-off"></i>
            </a>
        </p>

    </nav>

</aside>