<!DOCTYPE html>
<html lang="en">

<head>
    @include('client.layouts.header.header_link')
    @yield('header-link')
</head>

<body>
    @include('client.layouts.header.header')
    @yield('content')
    @include('client.layouts.footer.footer')
    @include('client.layouts.footer.footer_script')
    @yield('footer-script')
</body>

</html>
