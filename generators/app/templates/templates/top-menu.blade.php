<div class="top-menu">
    <ul class="nav navbar-nav pull-right">
        <!-- BEGIN NOTIFICATION DROPDOWN -->
        <!-- DOC: Apply "dropdown-dark" class after "dropdown-extended" to change the dropdown styte -->
        <!-- DOC: Apply "dropdown-hoverable" class after below "dropdown" and remove data-toggle="dropdown" data-hover="dropdown" data-close-others="true" attributes to enable hover dropdown mode -->
        <!-- DOC: Remove "dropdown-hoverable" and add data-toggle="dropdown" data-hover="dropdown" data-close-others="true" attributes to the below A element with dropdown-toggle class -->
        @section('notification-menu')
             @include('notification')
        @show

        @section('inbox')
        @show

        @section('task')
        @show
        
        @section('user')
        <li class="dropdown dropdown-user">
            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                <img alt="" class="img-circle" src="<?php echo Theme::base('assets/layouts/layout/img/avatar3_small.jpg') ?>" />
                <span class="username username-hide-on-mobile"> Nick </span>
                <i class="fa fa-angle-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-menu-default">
                <li>
                    <a href="<?php echo URL::site('users/profile') ?>">
                        <i class="icon-user"></i> My Profile </a>
                </li>
                <li class="divider"> </li>
                <li>
                    <a href="<?php echo URL::site('unauthorized') ?>">
                        <i class="icon-lock"></i> Lock Screen </a>
                </li>
                <li>
                    <a href="<?php echo URL::site('logout')?>">
                        <i class="icon-key"></i> Log Out </a>
                </li>
            </ul>
        </li>
        @show
        <!-- END USER LOGIN DROPDOWN -->
        <!-- BEGIN QUICK SIDEBAR TOGGLER -->
        <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
        @section('quick.sidebar')
        <!-- <li class="dropdown dropdown-quick-sidebar-toggler">
            <a href="javascript:;" class="dropdown-toggle">
                <i class="icon-logout"></i>
            </a>
        </li> -->
        @show
        <!-- END QUICK SIDEBAR TOGGLER -->
    </ul>
</div>