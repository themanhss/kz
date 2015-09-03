<!DOCTYPE html>
<html lang="en">
@include('layout.head')
<body>

<div id="wrapper">

    <!-- Navigation -->
    @include('layout.nav-top')
    <div class="contents"> @yield('content') </div>
</div>

@include('layout.script')
</body>

</html>
