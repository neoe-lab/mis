<!DOCTYPE html>
<html lang="en">

<head>
    @include('includes.header')
</head>

<body class="mini-sidebar">
    <div class="main-wrapper">
        {{-- start loader --}}
        @include('includes.loader')
        {{-- end loader --}}

        {{-- start navbar --}}
        @include('includes.navbar')
        {{-- end navbar --}}
        {{-- start menu --}}
        @include('includes.menu')
        {{-- end menu --}}
        {{-- start main-wrapper --}}

        @yield('content')
    </div>
    {{-- end main-wrapper --}}


    @include('includes.footer')
</body>

</html>
