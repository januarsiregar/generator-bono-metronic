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
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="Preview page of Metronic Admin Theme #2 for statistics, charts, recent events and reports" name="description" />
        <meta content="" name="author" />


        @include('metronic/css')

        <link href="<?php echo Theme::base('assets/layouts/layout2/css/layout.min.css') ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo Theme::base('assets/layouts/layout2/css/themes/blue.min.css') ?>" rel="stylesheet" type="text/css" id="style_color" />
        <link href="<?php echo Theme::base('assets/layouts/layout2/css/custom.min.css') ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo Theme::base('css/layouts/layout2.css') ?>" rel="stylesheet" type="text/css" />

        <!-- END THEME LAYOUT STYLES -->

        <!-- <link rel="shortcut icon" href="favicon.ico" /> -->
        <link rel="shortcut icon" href="<?php echo Theme::base('img/favicon.ico') ?>" type="image/x-icon">
        <link rel="icon" href="<?php echo Theme::base('img/favicon.ico') ?>" type="image/x-icon">
        @section('customcss')
            <!-- Custom CSS -->
        @show

        </head>
    <!-- END HEAD -->

    <body class="page-header-fixed page-sidebar-closed-hide-logo page-container-bg-solid">

        @section('notification-alert')
            <notification class="notification-alert">
                {{ f('notification.show') }}
            </notification>
        @show

        <!-- BEGIN HEADER -->
        @section('skeleton2')
            <div class="page-header navbar navbar-fixed-top">
                <!-- BEGIN HEADER INNER -->
                <div class="page-header-inner ">
                    <!-- BEGIN LOGO -->
                    @section('applogo')
                    <div class="page-logo">
                        <a href="index.html">
                            @section('applogo.image')
                            <img src="<?php echo Theme::base('assets/layouts/layout2/img/logo-default.png') ?>" alt="logo" class="logo-default" /> </a>
                            @show
                        @section('sidebar.toogler')
                        <div class="menu-toggler sidebar-toggler">
                            <!-- DOC: Remove the above "hide" to enable the sidebar toggler button on header -->
                        </div>
                        @show
                    </div>
                    @show
                    <!-- END LOGO -->
                    <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                    <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse"> </a>
                    <!-- END RESPONSIVE MENU TOGGLER -->
                    <!-- BEGIN PAGE TOP -->
                    <div class="page-top">
                        <!-- BEGIN HEADER SEARCH BOX -->
                        <!-- DOC: Apply "search-form-expanded" right after the "search-form" class to have half expanded search box -->
                        @section('search-general')
                        <form class="search-form search-form-expanded" action="page_general_search_3.html" method="GET">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search..." name="query">
                                <span class="input-group-btn">
                                    <a href="javascript:;" class="btn submit">
                                        <i class="icon-magnifier"></i>
                                    </a>
                                </span>
                            </div>
                        </form>
                        @show
                        <!-- END HEADER SEARCH BOX -->
                        <!-- BEGIN TOP NAVIGATION MENU -->
                        @section('top-menu')
                            @include('top-menu')
                        @show
                        <!-- END TOP NAVIGATION MENU -->
                    </div>
                    <!-- END PAGE TOP -->
                </div>
                <!-- END HEADER INNER -->
            </div>
            <!-- END HEADER -->
            <!-- BEGIN HEADER & CONTENT DIVIDER -->
            <div class="clearfix"> </div>
            <!-- END HEADER & CONTENT DIVIDER -->
            <!-- BEGIN CONTAINER -->
            @section('container')
            <div class="page-container
                @section('has-sidebar')
                    has-sidebar
                @show">
                <!-- BEGIN SIDEBAR -->
                @section('sidebar')
                <div class="page-sidebar-wrapper">

                    <div class="page-sidebar navbar-collapse collapse">
                        @section('sidebar.field')
                         @include('side-menu')
                        @show
                    </div>
                    <!-- END SIDEBAR -->
                </div>
                @show
                <!-- END SIDEBAR -->
                <!-- BEGIN CONTENT -->
                <div class="page-content-wrapper">
                    <!-- BEGIN CONTENT BODY -->
                    <div class="page-content">
                        <!-- BEGIN PAGE HEADER-->
                        @section('page.breadcumb')
                            <div class="page-bar">
                                <ul class="page-breadcrumb">
                                    <li>
                                        <i class="icon-home"></i>
                                        <a href="{{URL::site('')}}">Home</a>
                                        <i class="fa fa-angle-right"></i>
                                    </li>
                                    @section('page.breadcumb.section')
                                    <li>
                                        <span>Dashboard</span>
                                    </li>
                                    @show
                                </ul>
                            </div>
                        @show
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

                                 <div class="modal fade template" id="modal_template" role="basic" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <img src="../www/assets/global/img/loading-spinner-grey.gif" alt="" class="loading">
                                                    <span> &nbsp;&nbsp;Loading... </span>
                                                </div>
                                            </div>
                                        </div>
                                 </div>

                                @show
                            </main>
                        @show
                    </div>
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
            @show

            @section('footer')
            <div class="page-footer">
                <div class="page-footer-inner"> 2016 &copy; Metronic Theme By
                    <a target="_blank" href="http://keenthemes.com">Keenthemes</a> &nbsp;|&nbsp;
                    <a href="http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes" title="Purchase Metronic just for 27$ and get lifetime updates for free" target="_blank">Purchase Metronic!</a>
                    <div class="scroll-to-top">
                        <i class="icon-arrow-up"></i>
                    </div>
                </div>
            </div>
            @show


        @show


        @section('quick.nav')

        @show

        @include('metronic/javascript')
        <script src="<?php echo Theme::base('assets/layouts/layout2/scripts/layout.min.js') ?>" type="text/javascript"></script>
        <!-- END THEME LAYOUT SCRIPTS -->


        <!-- END PAGE LEVEL SCRIPTS -->
        @section('customjs')
            <!-- Custom JS -->
        @show
            <script>
                $(document).ready(function()
                {
                    $('#clickmewow').click(function()
                    {
                        $('#radio1003').attr('checked', 'checked');
                    });
                })
            </script>
    </body>

</html>
