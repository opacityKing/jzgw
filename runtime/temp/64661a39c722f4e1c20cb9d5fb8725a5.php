<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:80:"C:\wnmp\nginx\html\tp5\public/../application/admin\view\common\header_Index.html";i:1516948427;}*/ ?>
		<!-- 头部 -->
		<div class="navbar">
			<div class="navbar-inner">
				<div class="navbar-container">
					<!-- Navbar Barnd -->
					<div class="navbar-header pull-left">
						<a href="#" class="navbar-brand">
							<small>
                        <img src="__STATIC__/index/img/icons/logo.png" alt="">
                    </small>
							<span>锦众科技</span>
						</a>
					</div>
					<!-- /Navbar Barnd -->
					<!-- Sidebar Collapse -->
					<div class="sidebar-collapse" id="sidebar-collapse">
						<i class="collapse-icon fa fa-bars"></i>
					</div>
					<!-- /Sidebar Collapse -->
					<!-- Account Area and Settings -->
					<div class="navbar-header pull-right">
						<div class="navbar-account">
							<ul class="account-area">
								<li>
									<a class="login-area dropdown-toggle" data-toggle="dropdown">
										<div class="avatar" title="View your public profile">
											<img src="__STATIC__/admin/images/admicon.jpg">
										</div>
										<section>
											<h2><span class="profile"><span><?php echo \think\Request::instance()->session('admin.username'); ?></span></span></h2>
										</section>
									</a>
									<!--Login Area Dropdown-->
									<ul class="pull-right dropdown-menu dropdown-arrow dropdown-login-area">
										<li class="username">
											<a>David Stevenson</a>
										</li>
										<li class="dropdown-footer">
											<a href="<?php echo url('Admin/logout'); ?>">
												退出登录
											</a>
										</li>
										<li class="dropdown-footer">
											<a href="<?php echo url('Admin/upd',['id'=>\think\Request::instance()->session('admin.id')]); ?>">
												修改密码
											</a>
										</li>
									</ul>
									<!--/Login Area Dropdown-->
								</li>
								<!-- /Account Area -->
								<!--Note: notice that setting div must start right after account area list.
                            no space must be between these elements-->
								<!-- Settings -->
							</ul>
						</div>
					</div>
					<!-- /Account Area and Settings -->
				</div>
			</div>
		</div>

		<!-- /头部 -->