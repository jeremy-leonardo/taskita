<!DOCTYPE html>
<html lang="en">

<head>

    <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;" />
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('favicon-16x16.png')}}">
    <link rel="manifest" href="{{asset('site.webmanifest')}}">

    <meta name="description" content="Taskita merupakan website penyewaan tas untuk keperluan travelling atau bahkan pesta. (Website hanyalah sebuah demo)">
    @include('layouts._partials.style')
    
</head>

<body>

    @yield('content')

    @include('layouts._partials.footer')


    @include('layouts._partials.script')
    @yield('script')

</body>

</html>