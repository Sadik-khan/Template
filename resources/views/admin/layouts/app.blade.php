<!DOCTYPE html>
<html lang="en">

<head lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <title>Adminty - Premium Admin Template by Colorlib </title>
    <!-- HTML5 Shim and Respond.js IE10 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 10]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
 
    <!-- Meta -->
    @include('_partials.backend.admin.meta')
 
    {{-- FavIcon & Stylesheet --}}
    @include('_partials.backend.admin.stylesheet')
</head>

<body>
<!-- Pre-loader start -->
<div class="theme-loader">
    <div class="ball-scale">
        <div class='contain'>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
        </div>
    </div>
</div>
<!-- Pre-loader end -->
<div id="pcoded" class="pcoded">
    <div class="pcoded-overlay-box"></div>
    <div class="pcoded-container navbar-wrapper">

        <div style="position: absolute;top: 50%;left: 50%;z-index:100; display:none;" id="loader">
            <i class="fa fa-spinner fa-spin fa-5x fa-fw"></i><h3>Loading...</h3>
        </div>

        @include('_partials.backend.admin.navbar')
        
        <div class="pcoded-main-container">
            <div class="pcoded-wrapper">
                
                {{-- Sidebar --}}
                @include('_partials.backend.admin.sidebar')

                <div class="pcoded-content">
                    <div class="pcoded-inner-content">
                        <!-- Main-body start -->
                        <div class="main-body">
                            <div class="page-wrapper">
                                <!-- Page-header start -->
                                @yield('page.header')
                                <!-- Page-header end -->
                
                                <div class="page-body">
                                    {{-- Main Content --}}
                                    @yield('content')
                                </div>

                                @if(isset($modal))
                                    <!-- Remote source -->
                                    <div id="modal_remote" class="modal fade border-top-success rounded-top-0" data-backdrop="static" role="dialog">
                                        <div class="modal-dialog modal-{{ $modal }} modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header bg-light border-grey-300">
                                                    <h5 class="modal-title">{{$title}}</h5>
                                                    <button type="button" class="close text-danger" data-dismiss="modal">&times;</button>
                                                </div>
                                                <div id="modal-loader" style="display: none; text-align: center;">
                                                    <i class="fa fa-spinner fa-spin fa-5x fa-fw"></i><h3>Loading...</h3>
                                                </div>
                                                <div class="modal-body">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /remote source -->
                                @endif
                            </div>
                        </div>
                        <div id="styleSelector">
                
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Warning Section Starts -->
<!-- Older IE warning message -->
<!--[if lt IE 10]>
<div class="ie-warning">
    <h1>Warning!!</h1>
    <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers
        to access this website.</p>
    <div class="iew-container">
        <ul class="iew-download">
            <li>
                <a href="http://www.google.com/chrome/">
                    <img src="../files/assets/images/browser/chrome.png" alt="Chrome">
                    <div>Chrome</div>
                </a>
            </li>
            <li>
                <a href="https://www.mozilla.org/en-US/firefox/new/">
                    <img src="../files/assets/images/browser/firefox.png" alt="Firefox">
                    <div>Firefox</div>
                </a>
            </li>
            <li>
                <a href="http://www.opera.com">
                    <img src="../files/assets/images/browser/opera.png" alt="Opera">
                    <div>Opera</div>
                </a>
            </li>
            <li>
                <a href="https://www.apple.com/safari/">
                    <img src="../files/assets/images/browser/safari.png" alt="Safari">
                    <div>Safari</div>
                </a>
            </li>
            <li>
                <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                    <img src="../files/assets/images/browser/ie.png" alt="">
                    <div>IE (9 & above)</div>
                </a>
            </li>
        </ul>
    </div>
    <p>Sorry for the inconvenience!</p>
</div>
<![endif]-->
<!-- Warning Section Ends -->
@include('_partials.backend.admin.script')
</body>

</html>
