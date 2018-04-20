<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:80:"C:\wnmp\nginx\html\tp5\public/../application/admin\view\common\header_Index.html";i:1516948427;s:80:"C:\wnmp\nginx\html\tp5\public/../application/admin\view\common\page_sidebar.html";i:1523585864;}*/ ?>
<div class="page-sidebar" id="sidebar">
    <!-- Page Sidebar Header-->
    <div class="sidebar-header-wrapper">
        <input class="searchinput" type="text">
        <i class="searchicon fa fa-search"></i>
        <div class="searchhelper">Search Reports, Charts, Emails or Notifications</div>
    </div>
    <!-- /Page Sidebar Header -->
    <!-- Sidebar Menu -->
    <ul class="nav sidebar-menu">
        <!--Dashboard-->

        <!--<li>-->
        <!--<a href="#" class="menu-dropdown">-->
        <!--<i class="menu-icon fa fa-file-text"></i>-->
        <!--<span class="menu-text">官网管理</span>-->
        <!--<i class="menu-expand"></i>-->
        <!--</a>-->
        <!--</li>-->

        <li>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-gear"></i>
                <span class="menu-text">官网管理</span>
                <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li>
                    <a href="<?php echo url('News/index'); ?>">
						<span class="menu-text">
                                        新闻管理                                    </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
            </ul>
            <ul class="submenu">
                <li>
                    <a href="<?php echo url('Product/index'); ?>">
						<span class="menu-text">
                                        产品管理                                   </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
            </ul>
            <ul class="submenu">
                <li>
                    <a href="<?php echo url('Article/index'); ?>">
						<span class="menu-text">
                                        其他                                    </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
            </ul>
        </li>

    </ul>
    <!-- /Sidebar Menu -->
</div>