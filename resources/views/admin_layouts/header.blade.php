<!-- Default admin header -->
<header class="d-flex justify-content-between align-items-center px-5 border-bottom">

    <div class="leftSection d-flex align-items-center">
        <select name="seller">
            <option value="sellers">All Seller</option>
            <option value="seller2">seller 2</option>
            <option value="seller3">seller 3</option>
        </select>
    </div>

    <div class="centerSection d-flex justify-content-between">
        <!-- Search -->
        <form action="" method="GET" class="d-flex">
            <i class="bi bi-search"></i>
            <input type="search" name="search" placeholder="...search for anything">
        </form>

        <button>
            <i class="bi bi-plus"></i>
            <span>Add Seller</span>
        </button>
    </div>

    <div class="rightSection d-flex justify-content-between align-items-center">
        <i class="bi bi-bell-fill"></i>
        <img src="{{ asset('frontend_assets/assets/images/moji.png') }}" alt="admin photo">
    </div>

</header>