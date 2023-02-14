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

    </head>

    <body>

        <section class="d-flex">

            <!-- Left side content wrapper -->
            <aside class="leftAside d-flex flex-column justify-content-center align-items-center">
                @yield('leftAside') 
            </aside>
            
            <!-- Right side content wrapper -->
            <aside id="rightAside">

                <div class="header d-flex justify-content-end align-items-center">
                   <p>@yield('headerTexts')</p>
                    <a href="@yield('headerLink')" class="btn rounded-1">@yield('headerLinkTexts')</a>
                </div>
                
                <!-- Form inputs wrapper -->
                <div class="formWrapper d-flex flex-column">

                    <div class="formContents d-flex flex-column">
                        @yield('formContents') 
                    </div>

                </div>

            </aside>

        </section>

    </section>

    </body>

</html>