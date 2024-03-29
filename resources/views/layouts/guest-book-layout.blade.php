<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', 'PayFast Address Book')</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>


    <link rel="shortcut icon" href="{{ asset('img/logo_42.jpg') }}">

    <!-- Styles -->
    <style>
        .is-complete{
            text-decoration: line-through;
        }
        .content{
            margin-left: 2em;
            margin-right: 3em;
        }
        .content ul{
            list-style: none !important;
        }
        .input
        {
            width:30em;
        }
    </style>
    {{--@include('head')--}}

</head>
<body>
<div class="flex-center position-ref full-height">

    <div class="content">
        @include('header')
        <div class="title m-b-md">
            @yield('content')
        </div>
        <footer class="row">
            @include('footer')
        </footer>
    </div>
</div>
</body>
</html>
