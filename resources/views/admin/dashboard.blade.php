@extends('admin.admin_layouts.base_admin')

<!-- Style/title for index page -->
@section('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend_assets/styles/css/adminDashboard.css') }}">
    <title>{{ 'Blogger | Dashboard' }}</title>
@endsection

@section('content')

    <div class="dashboardContainer pt-5 px-5 p-4">

        <div class="dashboardCaption d-flex justify-content-between align-items-center">
            <h2 class="pt-2">Admin Dashboard</h2>
        </div>

        {{-- First row overview --}}
        <div class="firstRowOverview mt-4 d-flex justify-content-between">

            <div class="overview d-flex align-items-center ps-4">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                    <path d="M512 80c0 18-14.3 34.6-38.4 48c-29.1 16.1-72.5 27.5-122.3 30.9c-3.7-1.8-7.4-3.5-11.3-5C300.6 137.4 248.2 128 192 128c-8.3 0-16.4 .2-24.5 .6l-1.1-.6C142.3 114.6 128 98 128 80c0-44.2 86-80 192-80S512 35.8 512 80zM160.7 161.1c10.2-.7 20.7-1.1 31.3-1.1c62.2 0 117.4 12.3 152.5 31.4C369.3 204.9 384 221.7 384 240c0 4-.7 7.9-2.1 11.7c-4.6 13.2-17 25.3-35 35.5c0 0 0 0 0 0c-.1 .1-.3 .1-.4 .2l0 0 0 0c-.3 .2-.6 .3-.9 .5c-35 19.4-90.8 32-153.6 32c-59.6 0-112.9-11.3-148.2-29.1c-1.9-.9-3.7-1.9-5.5-2.9C14.3 274.6 0 258 0 240c0-34.8 53.4-64.5 128-75.4c10.5-1.5 21.4-2.7 32.7-3.5zM416 240c0-21.9-10.6-39.9-24.1-53.4c28.3-4.4 54.2-11.4 76.2-20.5c16.3-6.8 31.5-15.2 43.9-25.5V176c0 19.3-16.5 37.1-43.8 50.9c-14.6 7.4-32.4 13.7-52.4 18.5c.1-1.8 .2-3.5 .2-5.3zm-32 96c0 18-14.3 34.6-38.4 48c-1.8 1-3.6 1.9-5.5 2.9C304.9 404.7 251.6 416 192 416c-62.8 0-118.6-12.6-153.6-32C14.3 370.6 0 354 0 336V300.6c12.5 10.3 27.6 18.7 43.9 25.5C83.4 342.6 135.8 352 192 352s108.6-9.4 148.1-25.9c7.8-3.2 15.3-6.9 22.4-10.9c6.1-3.4 11.8-7.2 17.2-11.2c1.5-1.1 2.9-2.3 4.3-3.4V304v5.7V336zm32 0V304 278.1c19-4.2 36.5-9.5 52.1-16c16.3-6.8 31.5-15.2 43.9-25.5V272c0 10.5-5 21-14.9 30.9c-16.3 16.3-45 29.7-81.3 38.4c.1-1.7 .2-3.5 .2-5.3zM192 448c56.2 0 108.6-9.4 148.1-25.9c16.3-6.8 31.5-15.2 43.9-25.5V432c0 44.2-86 80-192 80S0 476.2 0 432V396.6c12.5 10.3 27.6 18.7 43.9 25.5C83.4 438.6 135.8 448 192 448z"/>
                </svg>
                <div class="overviewDetails ms-3">
                    <h3>₦400,000</h3>
                    <p>Total revenue</p>
                </div>
            </div>

            <div class="overview d-flex align-items-center ps-4">
                <i class="bi bi-shop overviewIcon iconTwo"></i>
                <div class="overviewDetails ms-3">
                    <h3 class="statTwo">77</h3>
                    <p>Total sellers</p>
                </div>
            </div>

            <div class="overview d-flex align-items-center ps-4">
                <i class="bi bi-person overviewIcon iconThree"></i>
                <div class="overviewDetails ms-3">
                    <h3 class="statThree">700</h3>
                    <p>Total users</p>
                </div>
            </div>

            <div class="overview d-flex align-items-center ps-4">
                <i class="bi bi-box2 overviewIcon iconFour"></i>
                <div class="overviewDetails ms-3">
                    <h3 class="statFour">300</h3>
                    <p>Total orders</p>
                </div>
            </div>

        </div>

        {{-- Second row overview --}}
        <div class="secondRowOverview d-flex justify-content-between mt-4">

            <div class="firstCol p-4">
                Selectable graph for:<br>
                Products<br>
                Categories<br>
                Users<br>
                Sellers<br>
            </div>
            <div class="secondCol p-4">
                calendar goes here
            </div>

        </div>

        {{-- Third row overview --}}
        <div class="thirdRowOverview d-flex justify-content-between mt-4">

            <div class="colOne p-4">
                User Enrollment
            </div>
            <div class="colTwo p-4">
                Seller Enrollment
            </div>

        </div>

    </div>

@endsection