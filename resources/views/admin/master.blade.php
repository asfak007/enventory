<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>RoyalX Dashboard</title>

    <!-- FontAwesome css -->
    <link rel="stylesheet" href="{{asset('/')}}admin/css/all.min.css" />
    <link rel="stylesheet" href="{{asset('/')}}admin/css/free.min.css" />
    <link rel="stylesheet" href="{{asset('/')}}admin/css/fontawesome.min.css" />

    <!-- Bootstrap link -->
    <link rel="stylesheet" href="{{asset('/')}}admin/css/bootstrap.min.css" />

    <!-- Font link -->
    <link rel="stylesheet" href="{{asset('/')}}admin/css/font.css" />

    <!-- css link -->
    <link rel="stylesheet" href="{{asset('/')}}admin/css/style.css" />
    <link rel="stylesheet" href="{{asset('/')}}admin/css/index.css" />
    <link rel="stylesheet" href="{{asset('/')}}admin/css/leftsideBar.css" />
</head>
<body>

@include('admin.includes.header')

<!-- Main Section start -->
<main class="maxW d-flex pb-5 mb-5">
    <!-- left side bar -->
    @include('admin.includes.navbar')
    <!-- left side bar end -->
    <!-- right section -->
    <section class="rightSide ms-xl-2 mt-3 w-100">
       @yield('body')
    </section>
</main>
<!-- Main Section end -->

<footer class="bg-white text-center py-lg-3 py-2 my-lg-3 mb-2">
    Copyright 2023 © Cuba theme by Royalx
</footer>

<!-- Bootstrap js link -->
<script src="{{asset('/')}}admin/js/bootstrap.min.js"></script>

<!-- chart js link -->
<script src="{{asset('/')}}admin/js/chart.min.js"></script>

<!-- Main JS  file-->
<script src="{{asset('/')}}admin/js/app.js"></script>
</body>
</html>

