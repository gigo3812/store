<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'فروشگاه اینترنتی هنرستان نمونه البرز')</title>
    <meta name="description" content="@yield('description', 'فروشگاه اینترنتی هنرستان نمونه البرز')">
    <meta name="keywords" content="@yield('keywords', 'فروشگاه، اینترنتی، هنرستان نمونه البرز')">
    <meta name="author" content="Hassan Abdini(gigo)">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/front/layout.css') }}">
    @yield('css')
</head>

<body>
    <div id="app" v-cloak>

        {{-- header --}}
        @include('layouts.header')

        {{-- loader --}}
        <div class="d-flex align-items-center justify-content-center loader" v-if="isLoading">
            <div class="loader-wait-request loader"></div>
        </div>

        {{-- content --}}
        <main v-if="!isLoading">
            @yield('content')
        </main>

        {{-- footer --}}
        @include('layouts.footer')

        {{-- notify --}}
        <notifications></notifications>


    </div>

    {{-- script --}}
    @yield('script')


    <!---start GOFTINO code--->
    <script type="text/javascript">
        ! function() {
            var i = "ZbTUiC",
                a = window,
                d = document;

            function g() {
                var g = d.createElement("script"),
                    s = "https://www.goftino.com/widget/" + i,
                    l = localStorage.getItem("goftino_" + i);
                g.async = !0, g.src = l ? s + "?o=" + l : s;
                d.getElementsByTagName("head")[0].appendChild(g);
            }
            "complete" === d.readyState ? g() : a.attachEvent ? a.attachEvent("onload", g) : a.addEventListener("load", g, !1);
        }();
    </script>
    <!---end GOFTINO code--->

    {{-- main vue file --}}
    <script src="{{ asset('js/app.js') }}"></script>

</body>

</html>
