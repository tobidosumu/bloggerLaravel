<ul class="d-flex justify-content-between align-items-center wrap">
    
    <!-- Home link -->
    <li class="home">
        <a href="/">
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
    <li class="profile d-flex justify-content-between align-items-center">
        <div class="profileLinkWrapper" class="d-flex justify-content-between align-items-center">
            <i class="bi bi-caret-down-fill caretIcon" onclick="revealProfileDropdown()"></i>
        
            <a href="{{ url('/dashboard') }}">
                <img src="{{ asset('frontend_assets/assets/images/moji.png') }}" alt="user account">
            </a>
        </div>

        <!-- User profile login/logout dropdown menu -->
        <div id="profileDropdown" class="profileDropdown">
            <ul class="d-flex flex-column">
                <form action="" method="post">
                    <button type="submit" name="logOutUser" class="logout d-flex justify-content-even align-items-center">
                        <i class="bi bi-power"></i><span class="ps-2">Log out</span>
                    </button>
                </form>
            </ul>
        </div>
    </li>

    <!-- Search box-->
    <li class="search d-flex justify-content-center">
        <button type="submit" class="border-0">
            <i class="bi bi-search searchIcon" onclick="toggleSearchDropdown()"></i>
        </button>
    </li>

    <!-- Search box dropdown -->
    <div class="searchDropDown border rounded-bottom-2">
        <form action="" method="get" class="d-flex">
            <input type="search" name="search" placeholder="...search for posts and bloggers">
            <button><i class="bi bi-search"></i></button>
        </form>
    </div>

</ul>