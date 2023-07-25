<!DOCTYPE html>
<html lang="fa">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="robots" content="none" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="admin login">
    <title>@yield('title', 'Admin - ' . Voyager::setting('admin.title'))</title>
    <link rel="stylesheet" href="{{ asset('/css/front/login.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/front/layout.css') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">

</head>

<body>
    {{-- content --}}
    <div class="container my-5 p-5" id="login" v-cloak>
        <div class="row login">
            <div class="col-12 col-md-4">
                {{-- loader --}}
                <div class="d-flex align-items-center justify-content-center loader" v-if="isLoading">
                    <div class="loader-wait-request loader"></div>
                </div>

                @yield('content')
            </div>
            <div class="col-12 col-md-8 d-none d-md-block">
                <div class="d-flex flex-column align-items-center justify-content-center h-100">
                    <h1>{{ Voyager::setting('admin.title', 'GIGO') }}</h1>
                    <p>{{ Voyager::setting('admin.description', __('voyager::login.welcome')) }}</p>
                    <a href="/" class="d-flex flex-column align-items-center justify-content-center">
                        <img class="logo" src="{{ asset('source/logo-sm.png') }}" alt="">
                    </a>
                </div>
            </div>
        </div>

        <div class="home-btn">
            <a href="/">
                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="41.874" viewBox="0 0 50 41.874">
                    <path id="ui-home" d="M24.989,123.366c-3.745,0-7.49-.035-11.235.01a7.683,7.683,0,0,1-8.035-8.025c.17-3.62.055-7.25.02-10.87a1.6,1.6,0,0,1,.965-1.695q8.745-4.6,17.43-9.315a1.634,1.634,0,0,1,1.765.015q8.7,4.688,17.435,9.315a1.518,1.518,0,0,1,.935,1.59c-.045,3.745-.01,7.49-.02,11.235a7.484,7.484,0,0,1-7.665,7.735c-3.865.04-7.73,0-11.595,0Zm21.83-23.935a18.339,18.339,0,0,1-1.985-.775c-6.215-3.295-12.425-6.59-18.6-9.96a2.278,2.278,0,0,0-2.5.04C17.469,92.121,11.184,95.456,4.9,98.8c-2.155,1.14-4.31.235-4.825-1.99a3.184,3.184,0,0,1,1.92-3.525q8.67-4.642,17.34-9.26a47.959,47.959,0,0,1,4.615-2.32,3.043,3.043,0,0,1,2.27.05c7.375,3.845,14.715,7.76,22.05,11.685a2.962,2.962,0,0,1,1.6,3.54,3.289,3.289,0,0,1-3.055,2.455Z" transform="translate(0.001 -81.506)" fill="#a8a8a8"/>
                </svg>
            </a>
        </div>
        {{-- notify --}}
        <notifications></notifications>

    </div>
    @yield('post_js')

    <script src="{{ asset('js/login.js') }}"></script>

</body>

</html>
