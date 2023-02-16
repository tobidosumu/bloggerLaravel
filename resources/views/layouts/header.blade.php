<!-- Logo container/wrapper -->
<div class="logoContainer">
    <a href="{{ route('posts.index') }}">
        <img src="{{ asset('frontend_assets/assets/svg/bloggerLogoBlack.svg') }}" alt="blogger logo">
    </a>
</div>

<!-- Nav container/wrapper -->
<nav class="headerMenuContainer">
    @include('layouts.navigation')
</nav>