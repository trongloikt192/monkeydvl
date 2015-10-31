<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <meta property="qc:admins" content="76325664121654213563757">
        <title>Monkey DVL - @yield('header-title')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="default">
        <meta name="keywords" content="@yield('header-tags')">
        <meta name="description" content="Laravel框架教程,问答,社区">
        <meta name="author" content="@yield('header-author')">
        <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">

        <link rel="stylesheet" href="{{ asset('css/MetroJs.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/pace-theme-flash.css') }}" />

        <!-- BEGIN CORE CSS FRAMEWORK -->
        <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.css" />
        <!-- END CORE CSS FRAMEWORK -->

        <!-- BEGIN CSS TEMPLATE -->
        <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
        <!-- END CSS TEMPLATE -->

        <link rel="stylesheet" href="{{ asset('css/reset.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/embed.css') }}" />

        @yield('styles')
    </head>


    <body class="horizontal-menu  pace-done breakpoint-1024">

        <div class="pace  pace-inactive">
            <div data-progress="99" data-progress-text="100%" style="width: 100%;" class="pace-progress">
                <div class="pace-progress-inner"></div>
            </div>
            <div class="pace-activity"></div>
        </div>


        <!-- BEGIN HEADER -->
        @include('layouts/header')
        <!-- END HEADER -->

        <!-- BEGIN CONTAINER -->
        <div class="page-container row-fluid">
            <!-- BEGIN PAGE CONTAINER-->
            <div class="page-content">

                {{-- @include('layouts/navigation') --}}
                @include('layouts/notifications')

                <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
        
                <div class="content m-b-40">
                    <div class="row">
                        <div class="col-md-9  m-b-10 reset-padding-right-0">
                            <!-- BEGIN START METRO MENU-->
                            @include('layouts/headlines')
                            <!-- END START METRO MENU-->
                            
                            <!-- BEGIN PAGE CONTENT-->
                            <div class="row m-t-20">
                                <div class="col-md-12">
                                    @yield('content')
                                </div>
                            </div>
                            <!-- END PAGE CONTENT-->
                        </div>

                        <!-- BEGIN SIDEBAR-->
                        <div class="col-md-3 m-b-10 reset-padding-left-0">
                            @include('layouts/sidebar')
                        </div>
                        <!-- END SIDEBAR-->
                    </div>
                </div>

            </div>
            <!-- END PAGE CONTAINER-->


            <footer class="section white footer">
                @include('layouts/footer')
            </footer>

        </div>
        <!-- END CONTAINER -->



        <!-- BEGIN CORE JS FRAMEWORK-->
        <script type="text/javascript" src="{{ asset('js/jquery.js') }}" ></script>
        <script type="text/javascript" src="{{ asset('js/bootstrap.js') }}" ></script>
        <script type="text/javascript" src="{{ asset('js/pace.js') }}" ></script>
        <script type="text/javascript" src="{{ asset('js/MetroJs.js') }}" ></script>
        <script type="text/javascript" src="{{ asset('js/embed.js') }}" ></script>
        <!-- END CORE JS FRAMEWORK -->

        <!-- BEGIN PAGE LEVEL JS -->
        @yield('scripts')
        <!-- END PAGE LEVEL PLUGINS -->

    </body>
</html>