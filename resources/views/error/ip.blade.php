<!DOCTYPE html>
<html lang="en-us" class="no-js">

	<head>
		<meta charset="utf-8">
		<title></title>
		<meta name="description" content="404 | Page Not Found">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="author" content="Sadik">
        <!-- Favicon -->
        <link rel="shortcut icon" href="{{ asset('assets/backend/admin/images/favicon.ico') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('assets/error/style.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('css/font-awosome.min.css') }}">
	</head>

	<body>

        <canvas id="dotty"></canvas>

        <!-- Your logo on the top left -->
        <a href="#" class="logo-link" title="back home">

            <img src="{{ asset('assets/backend/admin/images/main.png') }}" class="logo" alt="Company's logo">

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
                <h1>Oops! An Error Occured.</h1>

                <p>Look like you use an ip that is not white listed from the admin. Please contact to the Admin</p>

            </div>

        </div>

    <footer class="light">
        <ul>
            <li><a target="_blank" href="http://sattit.com">Support</a></li>
            <li><a target="_blank" href="https://www.facebook.com/sattbd/"><i class="fa fa-facebook"></i></a></li>
            <li><a target="_blank" href="https://twitter.com/satt_it"><i class="fa fa-twitter"></i></a></li>
        </ul>
    </footer>
        <script src="{{ asset('assets/error/j.js') }}"></script>
        <script src="{{ asset('assets/error/boot.min.js') }}"></script>
        <!-- Mozaic plugin -->
        <script src="{{ asset('assets/error/mozaic.js') }}"></script>

    </body>

</html>
