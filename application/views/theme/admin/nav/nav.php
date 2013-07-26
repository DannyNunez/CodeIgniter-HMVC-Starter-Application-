<div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container-fluid">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <a class="brand" href="<?php echo base_url(); ?>"><?php echo $this->config->item('site_name'); ?></a>
            <div class="btn-group pull-right">
                <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                    <!-- TODO : add in ion_auth helper function to dynamically find and display the current users name. --> 
                    <i class="icon-user"></i> User
                    <span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="<?php echo base_url('auth/edit_user'); ?>">Profile</a></li>
                    <li><a href="#">Settings</a></li>
                    <li class="divider"></li>
                    <li><a href="<?php echo base_url('auth/logout'); ?>">Logout</a></li>
                </ul>
            </div>
            <div class="nav-collapse">
                <ul class="nav">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            Module 1
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo base_url(); ?>">All</a></li>
                            <li><a href="<?php echo base_url(); ?>">Add</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            Module 2
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo base_url(); ?>">All</a></li>
                            <li><a href="<?php echo base_url(); ?>">Add</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </div>
</div>