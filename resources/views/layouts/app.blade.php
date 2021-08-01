
<!doctype html>
<html lang="en">
 <head>
 <!-- Required meta tags -->
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">

 <!-- CoreUI CSS -->
 <link href="{{ asset('css/free.min.css') }}" rel="stylesheet"> <!-- icons -->
 <link href="{{ asset('css/flag-icon.min.css') }}" rel="stylesheet"> <!-- icons -->
 <!-- Main styles for this application-->
 <link href="{{ asset('css/style.css') }}" rel="stylesheet">
 <title> {{ config('app.name', 'Laravel') }}</title>

 </head>
 <body class="c-app">

    @include('partials.menu')
    <div class="c-wrapper">
        <header class="c-header c-header-light c-header-fixed c-header-with-subheader">
            <button class="c-header-toggler c-class-toggler d-lg-none mr-auto" type="button" data-target="#sidebar" data-class="c-sidebar-show"><span class="c-header-toggler-icon"></span></button><a class="c-header-brand d-sm-none" href="#"><img class="c-header-brand" ></a>
            <button class="c-header-toggler c-class-toggler ml-3 d-md-down-none" type="button" data-target="#sidebar" data-class="c-sidebar-lg-show" responsive="true"><span class="c-header-toggler-icon"></span></button>
            @yield('title')
        </header>
        <div class="c-body">
            <main class="c-main">
                <div class="container-fluid">
                    @yield('content')
                </div>
            </main>
            <footer class="c-footer">
                <div><a href="https://coreui.io">Book Me Now</a> © 2021 bookmenow.com</div>
                <div class="ml-auto">Powered by&nbsp;<a href="https://coreui.io/">CADT</a></div>
            </footer>      
        </div>
    </div>


 <!-- Optional JavaScript -->
 <!-- Popper.js first, then CoreUI JS -->
 <script src="{{ asset('js/coreui.bundle.min.js') }}"></script>
 <script src="{{ asset('js/coreui-utils.js') }}"></script>
 <script src="{{ asset('js/main.js') }}"></script>
 @yield('javascript')
 </body>
</html>

