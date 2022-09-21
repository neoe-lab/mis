<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.header')
</head>
<body>
    {{-- start navbar --}}
    @include('includes.navbar')
    {{-- end navbar --}}
    {{-- start menu --}}
    @include('includes.menu')
    {{-- end menu --}}
    {{-- start main-wrapper --}}
    
   <div class="main-wrapper">
    @yield('content')
    </div>
    {{-- end main-wrapper --}}
    

    @include('includes.footer')
</body>
</html>