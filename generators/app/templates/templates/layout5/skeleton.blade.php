<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>
        @section('title')
        {{ f('pagetitle', 'Dashboard') }}
        @show
        - Bono Metronic
    </title>
    <meta name="description" content="{{ f('pagetitle', 'Great App') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @include('metronic/css')
    <!-- custom css for skeleton -->
    <link href="<?php echo Theme::base('assets/layouts/layout5/css/layout.min.css') ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo Theme::base('assets/layouts/layout5/css/themes/default.min.css') ?>" rel="stylesheet" type="text/css" id="style_color" />
    <link href="<?php echo Theme::base('assets/layouts/layout5/css/custom.min.css')?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo Theme::base('css/layouts/layout5.css') ?>" rel="stylesheet" type="text/css" />

    <link rel="shortcut icon" href="<?php echo Theme::base('img/favicon.ico') ?>" type="image/x-icon">
    <link rel="icon" href="<?php echo Theme::base('img/favicon.ico') ?>" type="image/x-icon">
    @section('customcss')
    <!-- Custom CSS -->
    @show

</head>

    <body class="page-header-fixed page-sidebar-closed-hide-
        @section('class.body')
        @show">

        @section('notification-alert')
            <notification class="notification-alert">
                {{ f('notification.show') }}
            </notification>
        @show

        <!-- BEGIN CONTAINER -->
        @section('skeleton5')
        <div class="wrapper">
            <!-- BEGIN HEADER -->
            <header class="page-header">
                <nav class="navbar mega-menu" role="navigation">
                    <div class="container-fluid">
                        <div class="clearfix navbar-fixed-top">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="toggle-icon">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </span>
                            </button>
                            <!-- End Toggle Button -->
                            <!-- BEGIN LOGO -->
                            @section('applogo')
                            <a id="index" class="page-logo" href="index.html">
                                <img src="<?php echo Theme::base('assets/layouts/layout5/img/logo.png') ?>" alt="Logo"> </a>
                            @show
                            <!-- END LOGO -->
                            <!-- BEGIN SEARCH -->
                            @section('search-general')
                            <form class="search" action="extra_search.html" method="GET">
                                <input type="name" class="form-control" name="query" placeholder="Search...">
                                <a href="javascript:;" class="btn submit md-skip">
                                    <i class="fa fa-search"></i>
                                </a>
                            </form>
                            @show
                            @section('topbar')
                                @include('layout5/top-menu')
                            @show
                        </div>
                        <!-- BEGIN HEADER MENU -->
                        @section('hor-menu')
                            @include('layout5/horizontal-menu')
                        @show
                        <!-- END HEADER MENU -->
                    </div>
                    <!--/container-->
                </nav>
            </header>
            <!-- END HEADER -->
            @section('container')
            <div class="container-fluid">
                <div class="page-content">
                    <!-- BEGIN BREADCRUMBS -->
                    <div class="breadcrumbs">
                        <h1>Admin Dashboard 2</h1>
                        @section('page.breadcumb')
                        <ol class="breadcrumb">
                            <li>
                                <a href="#">Home</a>
                            </li>
                            @section('page.breadcumb.section')
                            <li class="active">Dashboard</li>
                            @show
                        </ol>
                        @show
                    </div>
                    <!-- END BREADCRUMBS -->
                    <!-- BEGIN PAGE BASE CONTENT -->
                    @section('page')
                        <main class="content @section('main.classes')
                                has-contextual
                            @show">

                            @section('content')
                                <div class="wrapper">
                                    @section('fields')
                                        &nbsp;
                                    @show
                                </div>
                            @show

                            @section('contextual')
                                <nav id="contextual">
                                    @section('contextual.content')
                                        &nbsp;
                                    @show
                                </nav>
                            @show
                            @section('modal')

                            <!-- <div class="modal fade template" id="modal_template" role="basic" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img src="../www/assets/global/img/loading-spinner-grey.gif" alt="" class="loading">
                                            <span> &nbsp;&nbsp;Loading... </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
 -->
                            @show
                        </main>
                    @show
                    <!-- END PAGE BASE CONTENT -->
                </div>
                <!-- BEGIN FOOTER -->
                <p class="copyright"> 2016 &copy; Metronic Theme By
                    <a target="_blank" href="http://keenthemes.com">Keenthemes</a> &nbsp;|&nbsp;
                </p>
                <a href="#index" class="go2top">
                    <i class="icon-arrow-up"></i>
                </a>
                <!-- END FOOTER -->
            </div>
            @show
        </div>
        @show
        <!-- END CONTAINER -->
        <!-- BEGIN QUICK SIDEBAR -->
        <a href="javascript:;" class="page-quick-sidebar-toggler">
            <i class="icon-login"></i>
        </a>
        @section('quick-sidebar')
            @include('quick-sidebar')
        @show
        <!-- END QUICK SIDEBAR -->
        <!-- BEGIN QUICK NAV -->
        @section('quick.nav')
        <nav class="quick-nav">
            <a class="quick-nav-trigger" href="#0">
                <span aria-hidden="true"></span>
            </a>
            <ul>
                <li>
                    <a href="https://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes" target="_blank" class="active">
                        <span>Purchase Metronic</span>
                        <i class="icon-basket"></i>
                    </a>
                </li>
                <li>
                    <a href="https://themeforest.net/item/metronic-responsive-admin-dashboard-template/reviews/4021469?ref=keenthemes" target="_blank">
                        <span>Customer Reviews</span>
                        <i class="icon-users"></i>
                    </a>
                </li>
                <li>
                    <a href="http://keenthemes.com/showcast/" target="_blank">
                        <span>Showcase</span>
                        <i class="icon-user"></i>
                    </a>
                </li>
                <li>
                    <a href="http://keenthemes.com/metronic-theme/changelog/" target="_blank">
                        <span>Changelog</span>
                        <i class="icon-graph"></i>
                    </a>
                </li>
            </ul>
            <span aria-hidden="true" class="quick-nav-bg"></span>
        </nav>
        @show
        <div class="quick-nav-overlay"></div>

        @include('metronic/javascript')
        <!-- PLUGIN THEMES LAYOUT -->
        <script src="<?php echo Theme::base('assets/layouts/layout5/scripts/layout.min.js') ?>" type="text/javascript"></script>


        @include('script-external')
        <!-- END THEME LAYOUT SCRIPTS -->

        <!-- END PAGE LEVEL SCRIPTS -->
        @section('customjs')
        <!-- Custom JS -->
        @show
    </body>

</html>
