<link rel="icon" href="{{ asset('assets/frontend/logos/favicon.ico') }}" type="image/png" sizes="16x16">
<!-- Bootstrap -->
<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" media="all">
<!-- Font -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Poppins:400,300,500,700,600" rel="stylesheet" type="text/css">
<!-- Animate CSS -->
<link rel="stylesheet" href="{{ asset('assets/frontend/css/animate.css') }}">
<!-- Owl Carousel -->
<link rel="stylesheet" href="{{ asset('assets/frontend/css/owl.carousel.css') }}">
<link rel="stylesheet" href="{{ asset('assets/frontend/css/owl.theme.css') }}">
<!-- Magnific Popup -->
<link rel="stylesheet" href="{{ asset('assets/frontend/css/magnific-popup.css') }}">
<!-- Full Page Animation -->
<link rel="stylesheet" href="{{ asset('assets/frontend/css/animsition.min.css') }}">
<!-- Ionic Icons -->
<link rel="stylesheet" href="{{ asset('assets/frontend/css/ionicons.min.css') }}">
<!-- Main Style css -->
<link href="{{ asset('assets/frontend/css/style.css') }}" rel="stylesheet" type="text/css" media="all">
{{-- csrf-token --}}
<meta name="csrf-token" content="{{ csrf_token() }}">

@stack('frontend.css')