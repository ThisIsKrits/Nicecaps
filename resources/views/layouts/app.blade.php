<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- title -->
        <link rel="icon" href={{url("frontend/images/icon/logo-utama.png")}} style="width: 10px; height: 10px;">
        <title>@yield('title')</title>

        @include('includes.style')

    </head>
    <body>
        @include('includes.navbar')

        @yield('content')

        @include('includes.footer')
        


       @include('includes.script')
      </body>
</html>