<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:76:"C:\wnmp\nginx\html\tp5\public/../application/index\view\project\project.html";i:1521010994;s:80:"C:\wnmp\nginx\html\tp5\public/../application/index\view\Common\header_fluit.html";i:1521011660;}*/ ?>
<nav class="navbar navbar-fixed-top">
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
					<a href=<?php echo url( 'project/index'); ?> target="_blank">项目管理</a>
				</li>

				<li>
					<a href=<?php echo url( 'order/index'); ?> target="_blank">工单管理</a>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" role="button" aria-haspopup="true" aria-expanded="false">联系我们 <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li>
							<a href=""><span class="glyphicon glyphicon-phone-alt" aria-hidden="true"></span> 0592-7161185</a>
						</li>
						<li>
							<a href=""><span class="glyphicon glyphicon-envelope" aria-hidden="true"> </span> wangping@jinzhongkeji.com</a>
						</li>
						<!--<li role="separator" class="divider"></li>-->
						<li>
							<a href=<?php echo url( 'index/index'); ?> target="_blank"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> 访问官网</a>
						</li>
					</ul>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> <?php echo \think\Request::instance()->session('member.username'); ?><span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li>
							<a href=<?php echo url( 'member/index'); ?> target="_blank">个人中心</a>
						</li>
						<!--<li role="separator" class="divider"></li>-->
						<li>
							<a href=<?php echo url( 'Signin/signout'); ?>>退出登录</a>
						</li>
					</ul>
				</li>

				<li>
					<a class="mydate" target="_blank">2017/12/13</a>
				</li>

			</ul>
		</div>
		<!--/.nav-collapse -->
	</div>

</nav>

