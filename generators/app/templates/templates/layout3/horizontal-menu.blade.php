<ul class="nav navbar-nav">
    <li aria-haspopup="true" class="menu-dropdown classic-menu-dropdown active">
        <a href="javascript:;"> Dashboard
            <span class="arrow"></span>
        </a>
        <ul class="dropdown-menu pull-left">
            <li aria-haspopup="true" class=" active">
                <a href="<?php echo URL::site() ?>" class="nav-link  active">
                    <i class="icon-bar-chart"></i> Default Dashboard
                    <span class="badge badge-success">1</span>
                </a>
            </li>
        </ul>
    </li>
    <li aria-haspopup="true" class="menu-dropdown classic-menu-dropdown ">
        <a href="<?php echo URL::site('test') ?>"> Test
            <span class="arrow"></span>
        </a>
    </li>
    <li aria-haspopup="true" class="menu-dropdown classic-menu-dropdown ">
        <a href="<?php echo URL::site('user') ?>"> User
            <span class="arrow"></span>
        </a>
    </li>
    <li aria-haspopup="true" class="menu-dropdown classic-menu-dropdown ">
        <a href="<?php echo URL::site('role') ?>"> Role
            <span class="arrow"></span>
        </a>
    </li>
    <li aria-haspopup="true" class="menu-dropdown classic-menu-dropdown ">
        <a href="<?php echo URL::site('previleges') ?>"> Previleges
            <span class="arrow"></span>
        </a>
        <ul class="dropdown-menu pull-left">
            <!-- empty -->
        </ul>
    </li>
    <li aria-haspopup="true" class="menu-dropdown classic-menu-dropdown ">
        <a href="<?php echo URL::site('sysparam') ?>"> System Parameter
            <span class="arrow"></span>
        </a>
    </li>
</ul>