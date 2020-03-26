<html>
    <head>
        <title> Test Project - @yield('title') </title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Fonts -->
        <link href="/css/fonts.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="/css/bootstrap.min.css">
        <script src="/js/Bootstrap.min.js"></script>
        <script src="/js/jquery.js"></script>
        <script src="/js/popper.js"></script>
        <link rel="stylesheet" href="/css/style.css" type="text/css">
    </head>
    <body class="container">
        <!--- Nav bar --->
        <ul class="nav justify-content-center navbar navbar-dark bg-warning mt-4">
            <li class="nav-item">
                <a class="nav-link" href="/">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="about">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="contact">Contact</a>
            </li>
        </ul>
        @yield('content')
        <!-- Footer Section--->
        <nav class="container justify-content-center navbar navbar-light bg-light">
            <a class="navbar-brand" href="/">All rights reserved @testproject.com</a>
        </nav>
    </body>
</html>