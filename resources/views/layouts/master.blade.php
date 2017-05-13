<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.4.1/css/bulma.min.css">
        <link rel="stylesheet" href="/css/app.css">

        <title>My Stream</title>

    </head>
    <body>
        <div id="app">

            @include('layouts.header')

            <section class="section">
                <div class="container">

                    <router-view></router-view>

                </div><!-- closing: .container -->
            </section><!-- closing: .section -->

        </div><!-- closing: #app -->

    <script src="/js/app.js"></script>
    </body>
</html>
