<div id="sidebar" class="sidebar responsive">
    <ul class="nav nav-list">
        <li class="<?php echo e($nav=='profile' ? 'active' : ''); ?>">
            <a href="<?php echo e(asset('/users/details')); ?>">
                <i class="menu-icon fa fa-user"></i>
                <span class="menu-text"> Profile </span>
            </a>

            <b class="arrow"></b>
        </li>
            <li class="<?php echo e($nav=='edit' ? 'active' : ''); ?>">
                <a href="<?php echo e(asset('/users/edit/profile')); ?>" class="<?php echo e($nav); ?>">
                    <i class="menu-icon fa fa-edit"></i>
                    <span class="menu-text"> Edit Profile </span>
                </a>
            </li>


</ul><!-- /.nav-list -->

<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
    <i class="ace-icon fa fa-angle-double-left" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
</div>
</div>