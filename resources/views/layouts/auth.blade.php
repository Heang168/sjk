
<!doctype html>
<html lang="en">
 <head>
 <!-- Required meta tags -->
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">

 <!-- CoreUI CSS -->
 <link rel="stylesheet" href="https://unpkg.com/@coreui/coreui/dist/css/coreui.min.css" crossorigin="anonymous">
 <link href="{{ asset('css/free.min.css') }}" rel="stylesheet"> <!-- icons -->
 <link href="{{ asset('css/flag-icon.min.css') }}" rel="stylesheet"> <!-- icons -->
 <!-- Main styles for this application-->
 <link href="{{ asset('css/style.css') }}" rel="stylesheet">
 <title> {{ config('app.name', 'Laravel') }}</title>

 </head>
 <body class="c-app flex-row align-items-center">
    @yield('content')
 </body>
</html>
