<div class="top-menu">
    <ul class="nav navbar-nav pull-right">
        <li class="separator hide"> </li>
        <!-- BEGIN NOTIFICATION DROPDOWN -->
        <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
        <!-- DOC: Apply "dropdown-hoverable" class after "dropdown" and remove data-toggle="dropdown" data-hover="dropdown" data-close-others="true" attributes to enable hover dropdown mode -->
        <!-- DOC: Remove "dropdown-hoverable" and add data-toggle="dropdown" data-hover="dropdown" data-close-others="true" attributes to the below A element with dropdown-toggle class -->
        @section('notification-menu')
            @include('notification')
        @show
        <!-- END NOTIFICATION DROPDOWN -->
        <li class="separator hide"> </li>
        @section('inbox')
        @show

        <li class="separator hide"> </li>

        @section('task')
        @show
        
        <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
        @section('user')
        <li class="dropdown dropdown-user dropdown-dark">
            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                <span class="username username-hide-on-mobile"> Nick </span>
                <!-- DOC: Do not remove below empty space(&nbsp;) as its purposely used -->
                <img alt="" class="img-circle" src="../assets/layouts/layout4/img/avatar9.jpg" /> </a>
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
        @section('quick.sidebar')
        <!-- <li class="dropdown dropdown-extended quick-sidebar-toggler">
            <span class="sr-only">Toggle Quick Sidebar</span>
            <i class="icon-logout"></i>
        </li> -->
        @show
        <!-- END QUICK SIDEBAR TOGGLER -->
    </ul>
</div>