<!-- Favicon icon -->
<link rel="icon" href="{{ asset('assets/backend/admin/images/favicon.ico') }}" type="image/x-icon">
<!-- Google font-->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
<!-- Required Fremwork -->
<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
<!-- themify-icons line icon -->
<link rel="stylesheet" type="text/css" href="{{ asset('css/themify-icons.css') }}">
<!-- ico font -->
<link rel="stylesheet" type="text/css" href="{{ asset('css/icofont.css') }}">
<!-- feather Awesome -->
<link rel="stylesheet" type="text/css" href="{{ asset('css/feather.css') }}">
{{-- Notification --}}
<link type="text/css" rel="stylesheet" href="{{ asset('css/notification.css') }}"/>
{{-- Parsley --}}
<link type="text/css" rel="stylesheet" href="{{ asset('css/parsley.css') }}"/>
{{-- Toolbar --}}
<link type="text/css" rel="stylesheet" href="{{ asset('css/toolbar.css') }}"/>
{{-- font Awosome --}}
<link type="text/css" rel="stylesheet" href="{{ asset('css/font-awosome.min.css') }}"/>
{{-- font Awosome --}}
<link type="text/css" rel="stylesheet" href="{{ asset('css/swithery.min.css') }}"/>
<!-- Style.css -->
<link rel="stylesheet" type="text/css" href="{{ asset('assets/backend/admin/css/style.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/backend/admin/css/jquery.mCustomScrollbar.css') }}">
<style>
    .btn-toolbar{
  margin: 0 auto;
}


.tool-top .tool-item:first-child, .tool-bottom .tool-item:first-child{
  border-top-left-radius: 6px;
  border-bottom-left-radius: 6px;
}
.tool-top .tool-item:last-child, .tool-bottom .tool-item:last-child{
  border-top-right-radius: 6px;
  border-bottom-right-radius: 6px;
}

.tool-left .tool-item:first-child, .tool-right .tool-item:first-child{
  border-top-left-radius: 6px;
  border-top-right-radius: 6px;
}
.tool-left .tool-item:last-child, .tool-right .tool-item:last-child{
  border-bottom-left-radius: 6px;
  border-bottom-right-radius: 6px;
}

.btn-toolbar i{
	margin-right:0;
}
</style>
@stack('admin.css')