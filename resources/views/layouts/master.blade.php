<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
</head>
<body>
    @include('includes.header') 
    <div class="container"> 
        @yield('content') 
    </div> 
</body>
</html>