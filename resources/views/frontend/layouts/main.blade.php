<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title></title>
    
    <!-- Meta -->
    @include('_partials.frontend.meta')
    
    <!-- CSS and Favicon icon -->
    @include('_partials.frontend.stylesheet')
</head>

<body>

    <div class="wrapper animsition" data-animsition-in-class="fade-in" data-animsition-in-duration="1000" data-animsition-out-class="fade-out" data-animsition-out-duration="1000">
        
        {{-- Navbar Section --}}
        @include('_partials.frontend.header')
        
        {{-- Main Content --}}
        @section('content')
        @show

        {{-- Footer Section --}}
        @include('_partials.frontend.footer')
        
    </div>

    {{-- Script Section --}}
    @include('_partials.frontend.script')    
</body>

</html>
