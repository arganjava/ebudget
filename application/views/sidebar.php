<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="../../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>Alexander Pierce</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">Master Data</li>
            <li>
                <a href="<?php echo site_url('material');?>">
                    <i class="fa fa-fw fa-user"></i> <span>Material</span>
                </a>
            </li>

            <li>
                            <a href="<?php echo site_url('partner');?>">
                                <i class="fa fa-fw fa-user"></i> <span>Partner</span>
                            </a>
            </li>
             <li>
            				<a href="<?php echo site_url('customer');?>">
                                 <i class="fa fa-fw fa-user"></i> <span>Customer</span>
                             </a>
            </li>
             <li>
                             <a href="<?php echo site_url('user');?>">
                                 <i class="fa fa-fw fa-user"></i> <span>User</span>
                             </a>
            </li>
            <li>
                             <a href="<?php echo site_url('supplier');?>">
                                 <i class="fa fa-fw fa-user"></i> <span>Supplier</span>
                             </a>
            </li>


            <li class="header">Transaction</li>
            <li>
                             <a href="<?php echo site_url('project');?>">
                                 <i class="fa fa-fw fa-user"></i> <span>Project</span>
                             </a>
            </li>
            <li>
                             <a href="<?php echo site_url('project/confirmpage');?>">
                                 <i class="fa fa-fw fa-user"></i> <span>Confirmed Project</span>
                             </a>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
