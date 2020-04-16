<!DOCTYPE html>
<html lang="en-us" class="no-js">

	<head>
		<meta charset="utf-8">
		<title></title>
		<meta name="description" content="404 | Page Not Found">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="author" content="Sadik">
        <!-- Favicon -->
        <link rel="shortcut icon" href="{{ asset('assets/error/img/favicon.ico') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('assets/error/css/style.css') }}">
	</head>

	<body>

        <canvas id="dotty"></canvas>

        <!-- Your logo on the top left -->
        <a href="#" class="logo-link" title="back home">

            <img src="{{ asset('assets/error/img/main.png') }}" class="logo" alt="Company's logo">

        </a>

        <div class="content">

            <div class="content-box">

                <div class="big-content">

                    <!-- Main squares for the content logo in the background -->
                    <div class="list-square">
                        <span class="square"></span>
                        <span class="square"></span>
                        <span class="square"></span>
                    </div>

                    <!-- Main lines for the content logo in the background -->
                    <div class="list-line">
                        <span class="line"></span>
                        <span class="line"></span>
                        <span class="line"></span>
                        <span class="line"></span>
                        <span class="line"></span>
                        <span class="line"></span>
                    </div>

                    <!-- The animated searching tool -->
                    <i class="fa fa-search" aria-hidden="true"></i>

                    <!-- div clearing the float -->
                    <div class="clear"></div>

                </div>

                <!-- Your text -->
                <h1>Oops! Error 404 not found.</h1>

                <p>The page you were looking for doesn't exist.<br>
                    We think the page may have moved.</p>

            </div>

        </div>

    <footer class="light">
        <ul>
            <li><a target="_blank" href="http://sattit.com">Support</a></li>
            <li><a target="_blank" href="https://www.facebook.com/sattbd/"><i class="fa fa-facebook"></i></a></li>
            <li><a target="_blank" href="https://twitter.com/satt_it"><i class="fa fa-twitter"></i></a></li>
        </ul>
    </footer>
        <script src="{{ asset('assets/error/js/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/error/js/bootstrap.min.js') }}"></script>
        <!-- Mozaic plugin -->
        <script src="{{ asset('assets/error/js/mozaic.js') }}"></script>

    </body>

</html>
