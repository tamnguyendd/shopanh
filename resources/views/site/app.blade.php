<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>@yield('title') - {{ $settings["site_name"] }}</title>
    @include('site.partials.styles')
</head>
<body>
    
    @include('site.partials.header')
    @yield('content')
    @include('site.partials.footer')
    @include('site.partials.scripts')

</body>
</html>
