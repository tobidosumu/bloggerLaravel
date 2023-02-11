<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

        <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
        <script defer src="{{ asset('frontend_assets/js/animate.js') }}" type="text/javascript"></script>
        
        @yield('styles')

        <title>{{ config('app.name') }}</title>

    </head>

    <body>

        <!-- Main page container/wrapper -->
        <div class="mainContainer">

            <!-- Default header template -->
            <header class="d-flex justify-content-between align-items-center sticky-top border-bottom">
                @include('layouts.header')
            </header>

            <!-- Default contents container/wrapper -->
            <section class="blogContents">
                
                @yield('content')

                <!-- Default DropUsAMessage template -->
                <section class="dropUsAmessage p-5 rounded-2">
                    @include('layouts.dropUsMessage')
                </section>
            
            </section>

            <!-- Default footer template -->
            <footer class="d-flex justify-content-between py-5">

                @include('layouts.footer')

            </footer>

        </div>

    </body>

</html>