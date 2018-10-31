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
    <link href="<?php echo Theme::base('assets/layouts/layout3/css/layout.min.css') ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo Theme::base('assets/layouts/layout3/css/themes/default.min.css') ?>" rel="stylesheet" type="text/css" id="style_color" />
    <link href="<?php echo Theme::base('assets/layouts/layout3/css/custom.min.css')?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo Theme::base('css/layouts/layout3.css') ?>" rel="stylesheet" type="text/css" />

    <!-- END THEME LAYOUT STYLES -->

    <!-- <link rel="shortcut icon" href="favicon.ico" /> -->
    <link rel="shortcut icon" href="<?php echo Theme::base('img/favicon.ico') ?>" type="image/x-icon">
    <link rel="icon" href="<?php echo Theme::base('img/favicon.ico') ?>" type="image/x-icon">
    @section('customcss')
    <!-- Custom CSS -->
    @show

</head>

    <body class="page-container-bg-solid">

        @section('notification-alert')
            <notification class="notification-alert">
                {{ f('notification.show') }}
            </notification>
        @show

        @section('skeleton3')
        <div class="page-wrapper">
            <div class="page-wrapper-row">
                <div class="page-wrapper-top">
                    <!-- BEGIN HEADER -->
                    <div class="page-header">
                        <!-- BEGIN HEADER TOP -->
                        @section('topbar')
                        <div class="page-header-top">
                            <div class="container">
                                <!-- BEGIN LOGO -->
                                @section('applogo')
                                <div class="page-logo">
                                    <a href="index.html">
                                        <img src="<?php echo Theme::base('assets/layouts/layout3/img/logo-default.jpg') ?>" alt="logo" class="logo-default">
                                    </a>
                                </div>
                                @show
                                <!-- END LOGO -->
                                <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                                <a href="javascript:;" class="menu-toggler"></a>
                                <!-- END RESPONSIVE MENU TOGGLER -->
                                <!-- BEGIN TOP NAVIGATION MENU -->
                                @section('top-menu')
                                    @include('top-menu')
                                @show
                                <!-- END TOP NAVIGATION MENU -->
                            </div>
                        </div>
                        @show
                        <!-- END HEADER TOP -->
                        <!-- BEGIN HEADER MENU -->
                        <div class="page-header-menu">
                            <div class="container">
                                <!-- BEGIN HEADER SEARCH BOX -->
                                @section('search-general')
                                <form class="search-form" action="page_general_search.html" method="GET">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search" name="query">
                                        <span class="input-group-btn">
                                            <a href="javascript:;" class="btn submit">
                                                <i class="icon-magnifier"></i>
                                            </a>
                                        </span>
                                    </div>
                                </form>
                                @show
                                <!-- END HEADER SEARCH BOX -->
                                <!-- BEGIN MEGA MENU -->
                                <!-- DOC: Apply "hor-menu-light" class after the "hor-menu" class below to have a horizontal menu with white background -->
                                <!-- DOC: Remove data-hover="dropdown" and data-close-others="true" attributes below to disable the dropdown opening on mouse hover -->
                                <div class="hor-menu  ">
                                    @section('horizontal-menu')
                                        @include('layout3/horizontal-menu')
                                    @show
                                </div>
                                <!-- END MEGA MENU -->
                            </div>
                        </div>
                        <!-- END HEADER MENU -->
                    </div>
                    <!-- END HEADER -->
                </div>
            </div>
            <div class="page-wrapper-row full-height">
                <div class="page-wrapper-middle">
                    <!-- BEGIN CONTAINER -->
                    <div class="page-container">
                        <!-- BEGIN CONTENT -->
                        <div class="page-content-wrapper">
                            <!-- BEGIN CONTENT BODY -->
                            <!-- BEGIN PAGE HEAD-->
                            <div class="page-head">
                                <div class="container">
                                    <!-- BEGIN PAGE TITLE -->
                                    <div class="page-title">
                                        <h1>Dashboard
                                            <small>dashboard & statistics</small>
                                        </h1>
                                    </div>
                                    <!-- END PAGE TITLE -->
                                </div>
                            </div>
                            <!-- END PAGE HEAD-->
                            <!-- BEGIN PAGE CONTENT BODY -->
                            <div class="page-content">
                                @section('container')
                                <div class="container">
                                    <!-- BEGIN PAGE BREADCRUMBS -->
                                    @section('page.breadcumb')
                                    <ul class="page-breadcrumb breadcrumb">
                                        <li>
                                            <a href="index.html">Home</a>
                                            <i class="fa fa-circle"></i>
                                        </li>
                                        @section('page.breadcumb.section')
                                        <li>
                                            <span>Dashboard</span>
                                        </li>
                                        @show
                                    </ul>
                                    @show
                                    <!-- END PAGE BREADCRUMBS -->
                                    <!-- BEGIN PAGE CONTENT INNER -->
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
                                        </div> -->

                                        @show
                                    </main>
                                    @show
                                    <!-- END PAGE CONTENT INNER -->
                                </div>
                                @show
                            </div>

                            <!-- END PAGE CONTENT BODY -->
                            <!-- END CONTENT BODY -->
                        </div>
                        <!-- END CONTENT -->
                        <!-- BEGIN QUICK SIDEBAR -->
                        <a href="javascript:;" class="page-quick-sidebar-toggler">
                            <i class="icon-login"></i>
                        </a>
                        @section('quick-sidebar')
                            @include('quick-sidebar')
                        @show
                        <!-- END QUICK SIDEBAR -->
                    </div>
                    <!-- END CONTAINER -->
                </div>
            </div>
            <div class="page-wrapper-row">
                <div class="page-wrapper-bottom">
                    <!-- BEGIN FOOTER -->
                    <!-- BEGIN PRE-FOOTER -->
                    <div class="page-prefooter">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-3 col-sm-6 col-xs-12 footer-block">
                                    <h2>About</h2>
                                    <p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam dolore. </p>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs12 footer-block">
                                    <h2>Subscribe Email</h2>
                                    <div class="subscribe-form">
                                        <form action="javascript:;">
                                            <div class="input-group">
                                                <input type="text" placeholder="mail@email.com" class="form-control">
                                                <span class="input-group-btn">
                                                    <button class="btn" type="submit">Submit</button>
                                                </span>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <!-- <div class="col-md-3 col-sm-6 col-xs-12 footer-block">
                                    <h2>Follow Us On</h2>
                                    <ul class="social-icons">
                                        <li>
                                            <a href="javascript:;" data-original-title="rss" class="rss"></a>
                                        </li>
                                        <li>
                                            <a href="javascript:;" data-original-title="facebook" class="facebook"></a>
                                        </li>
                                        <li>
                                            <a href="javascript:;" data-original-title="twitter" class="twitter"></a>
                                        </li>
                                        <li>
                                            <a href="javascript:;" data-original-title="googleplus" class="googleplus"></a>
                                        </li>
                                        <li>
                                            <a href="javascript:;" data-original-title="linkedin" class="linkedin"></a>
                                        </li>
                                        <li>
                                            <a href="javascript:;" data-original-title="youtube" class="youtube"></a>
                                        </li>
                                        <li>
                                            <a href="javascript:;" data-original-title="vimeo" class="vimeo"></a>
                                        </li>
                                    </ul>
                                </div> -->
                                <div class="col-md-3 col-sm-6 col-xs-12 footer-block">
                                    <h2>Contacts</h2>
                                    <address class="margin-bottom-40"> Phone: 800 123 3456
                                        <br> Email:
                                        <a href="mailto:info@metronic.com">info@metronic.com</a>
                                    </address>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END PRE-FOOTER -->
                    <!-- BEGIN INNER FOOTER -->
                    <div class="page-footer">
                        <div class="container"> 2016 &copy; Metronic Theme By
                            <a target="_blank" href="http://keenthemes.com">Keenthemes</a> &nbsp;|&nbsp;
                            <a href="http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes" title="Purchase Metronic just for 27$ and get lifetime updates for free" target="_blank">Purchase Metronic!</a>
                        </div>
                    </div>
                    <div class="scroll-to-top">
                        <i class="icon-arrow-up"></i>
                    </div>
                    <!-- END INNER FOOTER -->
                    <!-- END FOOTER -->
                </div>
            </div>
        </div>
        @show

        @section('quick.nav')

        @show


        @include('metronic/javascript')
        <script src="<?php echo Theme::base('assets/layouts/layout3/scripts/layout.min.js') ?>" type="text/javascript"></script>
        <!-- END THEME LAYOUT SCRIPTS -->

        <!-- END PAGE LEVEL SCRIPTS -->
        @section('customjs')
        <!-- Custom JS -->
        @show
    </body>

</html>
