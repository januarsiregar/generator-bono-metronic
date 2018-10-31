<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

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

        <!-- START THEME LAYOUT STYLES -->
        @include('metronic/css');
        <link href="<?php echo Theme::base('assets/layouts/layout/css/layout.min.css') ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo Theme::base('assets/layouts/layout/css/themes/darkblue.min.css') ?>" rel="stylesheet" type="text/css" id="style_color" />
        <link href="<?php echo Theme::base('assets/layouts/layout/css/custom.min.css') ?>" rel="stylesheet" type="text/css" />
        
        <link href="<?php echo Theme::base('css/layouts/layout.css') ?>" rel="stylesheet" type="text/css" />
        <!-- END THEME LAYOUT STYLES -->

        <!-- <link rel="shortcut icon" href="favicon.ico" /> -->
        <link rel="shortcut icon" href="<?php echo Theme::base('img/favicon.ico') ?>" type="image/x-icon">
        <link rel="icon" href="<?php echo Theme::base('img/favicon.ico') ?>" type="image/x-icon">
        @section('customcss')
            <!-- Custom CSS -->
        @show

    </head>
    <!-- END HEAD -->



    <body class="page-header-fixed page-sidebar-closed-hide-logo page-content-white page-sidebar-fixed
        @section('class.body')
        @show">

        @section('notification-alert')
            <notification class="notification-alert">
                {{ f('notification.show') }}
            </notification>
        @show

        @section('skeleton1')
        <div class="page-wrapper">
            <!-- BEGIN HEADER -->
            @section('topbar')
            <div class="page-header navbar navbar-fixed-top">
                <!-- BEGIN HEADER INNER -->
                <div class="page-header-inner ">
                    <!-- BEGIN LOGO -->
                    @section('applogo')
                    <div class="page-logo">
                        <a href="{{URL::site('')}}">
                            @section('applogo.image')
                            <div style="background-image: url('<?php echo Theme::base('assets/layouts/layout/img/logo.png') ?>');" class="logo-default"></div>
                            @show
                        </a>
                        <!-- <div class="caption-logo">
                            <p>Massive Music Entertainment</p>
                        </div> -->
                        @section('sidebar.toogler')
                        <div class="menu-toggler sidebar-toggler">
                            <span></span>
                        </div>
                        @show
                    </div>
                    @show
                    @section('search-general')
                     <form class="search-form search-form-expanded" action="page_general_search_2.html" method="GET">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search..." name="query">
                            <span class="input-group-btn">
                                <a href="<?php echo URL::site('global-search'); ?>" class="btn submit">
                                    <i class="icon-magnifier"></i>
                                </a>
                            </span>
                        </div>
                    </form>
                    @show
                    <!-- END LOGO -->
                    <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                    <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
                        <span></span>
                    </a>
                    <!-- END RESPONSIVE MENU TOGGLER -->
                    <!-- BEGIN TOP NAVIGATION MENU -->
                    @section('top-menu')
                        @include('top-menu')
                    @show
                    <!-- END TOP NAVIGATION MENU -->
                </div>
                <!-- END HEADER INNER -->
            </div>
            @show
            
            <div class="clearfix"> </div>
            
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
                                        <a href="{{URL::site('')}}">Home</a>
                                        <i class="fa fa-circle"></i>
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
                                    <!-- <nav id="contextual">
                                        
                                    </nav> -->
                                @show
                                @section('modal')

                                 <div class="modal fade template" id="modal_template" role="basic" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <i class="fa fa-spinner fa-spin"></i>
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
            <!-- END CONTAINER -->
            <!-- BEGIN FOOTER -->

            @section('footer')
            <div class="page-footer">
            </div>
            @show

            <!-- END FOOTER -->
        </div>
        @show
        
        <!-- BEGIN QUICK NAV -->
        @section('quick.nav')
        
        @show




       
        <!-- END THEME LAYOUT SCRIPTS -->    
        @include('metronic/javascript')
        <script src="<?php echo Theme::base('assets/layouts/layout/scripts/layout.min.js') ?>" type="text/javascript"></script>
        <!-- END THEME LAYOUT SCRIPTS -->
        
        
        <!-- END PAGE LEVEL SCRIPTS -->
        @section('customjs')
            <!-- Custom JS -->
        @show
    </body>

</html>