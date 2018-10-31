<div class="nav-collapse collapse navbar-collapse navbar-responsive-collapse">
    <ul class="nav navbar-nav">
        <li class="dropdown dropdown-fw dropdown-fw-disabled  active open selected">
            <a href="javascript:;" class="text-uppercase">
                <i class="icon-home"></i> Dashboard</a>
            <ul class="dropdown-menu dropdown-menu-fw">
                <li class="active">
                    <a href="<?php echo URL::site() ?>">
                        <i class="icon-bar-chart"></i> Default </a>
                </li>
                <li>
                    <a href="dashboard_2.html">
                        <i class="icon-bulb"></i> Dashboard 2 </a>
                </li>
                <li>
                    <a href="dashboard_3.html">
                        <i class="icon-graph"></i> Dashboard 3 </a>
                </li>
            </ul>
        </li>
        <li class="dropdown dropdown-fw dropdown-fw-disabled  ">
            <a href="<?php echo URL::site('test') ?>" class="text-uppercase">
                <i class="icon-puzzle"></i> Test</a>
        </li>
        <li class="dropdown dropdown-fw dropdown-fw-disabled  ">
            <a href="<?php echo URL::site('user') ?>" class="text-uppercase">
                <i class="icon-user"></i> User</a>
        </li>
        <li class="dropdown dropdown-fw dropdown-fw-disabled  ">
            <a href="<?php echo URL::site('role') ?>" class="text-uppercase">
                <i class="icon-layers"></i> Role</a>
            <ul class="dropdown-menu dropdown-menu-fw">
                <!-- empty -->
            </ul>
        </li>
        <li class="dropdown dropdown-fw dropdown-fw-disabled  ">
            <a href="<?php echo URL::site('previleges') ?>" class="text-uppercase">
                <i class="icon-docs"></i> Previleges</a>
        </li>
        <li class="dropdown dropdown-fw dropdown-fw-disabled  ">
            <a href="<?php echo URL::site('sysparam') ?>" class="text-uppercase">
                <i class="icon-settings"></i> System Parameter</a>
        </li>
    </ul>
</div>