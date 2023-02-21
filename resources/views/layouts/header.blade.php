<header class="d-flex justify-content-between align-items-center border-bottom">

    <!-- Logo container/wrapper -->
    <div class="logoContainer">
        <a href="{{ route('posts.index') }}" class="logo">
            <img src="{{ asset('frontend_assets/assets/svg/bloggerLogoBlack.svg') }}" alt="blogger logo">
        </a>
    </div>

    <!-- Nav container/wrapper -->
    <nav class="headerMenuContainer d-flex justify-content-between align-items-center ps-3">

        <ul class="d-flex justify-content-between align-items-center">
            
            <!-- Home link -->
            <li class="home">
                <a href="{{ url('posts') }}">
                    <i class="bi bi-house"></i>
                </a>
            </li>

            <!-- Cart link -->
            <li class="cart">
                <a href="{{ url('/cart') }}">
                    <i class="bi bi-bag"></i><span>3</span>
                </a>
            </li> 

            <!-- User profile link -->
            <li class="profile">
                <!-- Caret Link -->
                <div class="profileLinkWrapper" class="d-flex justify-content-between align-items-center">
                    <i class="bi bi-caret-down-fill caretIcon" onclick="revealProfileDropdown()"></i>
                    
                    <!-- User avater Link -->
                    <a href="{{ url('/dashboard') }}">
                        <img src="{{ asset('frontend_assets/assets/images/moji.png') }}" alt="user account">
                    </a>
                </div>

                <!-- User profile login/logout dropdown menu -->
                <div id="profileDropdown" class="profileDropdown pb-2">

                    <ul class="d-flex flex-column">

                        @guest
                            <li>
                                <a class="d-flex justify-content-even align-items-center border-top border-bottom" href="{{ route('login') }}">
                                    <i class="bi bi-box-arrow-in-right pe-2"></i>Login
                                </a>
                            </li>
                            <li>
                                <a class="d-flex justify-content-even align-items-center border-top border-bottom" href="{{ route('register-user') }}">
                                <i class="bi bi-door-open pe-2"></i>Register
                                </a>
                            </li>
                        @else
                            <li class="logout">
                                <a class="d-flex justify-content-even align-items-center" href="{{ route('signout') }}">
                                    <i class="bi bi-power pe-2"></i> Logout
                                </a>
                            </li>
                        @endguest

                    </ul>

                </div>

            </li>

            <!-- Search box-->
            <li class="search">
                <button type="submit" class="border-0">
                    <i class="bi bi-search searchIcon" onclick="toggleSearchDropdown()"></i>
                </button>
            </li>

            <!-- Search box dropdown -->
            <div class="searchDropDown border rounded-bottom-2">
                <form action="" method="get" class="d-flex">
                    <input type="search" name="search" placeholder="...search for posts and bloggers" autocomplete="off">
                    <button><i class="bi bi-search"></i></button>
                </form>
            </div>

        </ul>

    </nav>

</header>