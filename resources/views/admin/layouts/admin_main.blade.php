<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.layouts.header.header_link')
    @yield('header-link')
</head>

<body>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            @include('admin.layouts.header.header')
            @include('admin.layouts.sidebar')
            @yield('content')
            @include('admin.layouts.footer.footer')
            @include('admin.layouts.footer.footer_script')
            @yield('footer-script')
        </div>
    </div>
</body>

</html>
