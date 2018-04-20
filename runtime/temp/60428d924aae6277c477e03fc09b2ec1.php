<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:74:"C:\wnmp\nginx\html\tp5\public/../application/admin\view\common\header.html";i:1516873200;}*/ ?>
<nav class="navbar navbar-inverse navbar-fixed-top">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
			<a class="navbar-brand" href="<?php echo url( 'index/index'); ?>" target="_blank">
				锦众科技
			</a>
		</div>
		<div id="navbar" class="collapse navbar-collapse">
			<ul class="nav navbar-nav navbar-right">
				<li>
					<a href=<?php echo url( 'Admin/index'); ?> target="_blank">用户列表</a>
				</li>

				<li>
					<a href=<?php echo url( 'Alarm/index'); ?> target="_blank">预报警信息</a>
				</li>
					<li>
					<a href=<?php echo url( 'Orders/index'); ?> target="_blank">工单管理</a>
				</li>

				<li>
					<a href=<?php echo url( 'Modals/index'); ?> target="_blank">模块管理</a>
				</li>
				
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> <?php echo \think\Request::instance()->session('member.username'); ?><span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li>
							<a href=<?php echo url( 'member/index'); ?> target="_blank">个人中心</a>
						</li>
						<li role="separator" class="divider"></li>
						<li>
							<a href=<?php echo url( 'Signin/signout'); ?>>退出登录</a>
						</li>
					</ul>
				</li>

				<li>
					<p class="navbar-text mydate" target="_blank">2017/12/13</p>
				</li>

			</ul>
		</div>
		<!--/.nav-collapse -->
	</div>

</nav>