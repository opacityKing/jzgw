<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:78:"C:\wnmp\nginx\html\tp5\public/../application/index\view\register\register.html";i:1513906401;}*/ ?>
<html lang="zh-CN">

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="shortcut icon" href="__STATIC__/index/img/logo.png" type="image/vnd.microsoft.icon">
		<link rel="icon" href="__STATIC__/index/img/logo.png" type="image/vnd.microsoft.icon">

		<title>锦众科技</title>

		<!-- Bootstrap core CSS -->
		<link href="__STATIC__/index/css/bootstrap.min.css" rel="stylesheet">

		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
		<link href="__STATIC__/index/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

		<!-- Custom styles for this template -->
		<link href="__STATIC__/index/css/offcanvas.css" rel="stylesheet">
		<link href="__STATIC__/index/css/register.css" rel="stylesheet">
		<link rel="stylesheet" href="__STATIC__/index/css/jquery.slider.css" />
		<script src="__STATIC__/index/js/ie-emulation-modes-warning.js"></script>

	</head>

	<body>
		<!--顶部导航栏-->
		<!--顶部导航栏-->
		<nav class=" navbar navbar-default navbar-fixed-top">
			<div class="register-header container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
					<a class="navbar-brand" href="#">锦众科技</a>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

					<ul class="nav navbar-nav navbar-right">
						<li>
							<a href="<?php echo url('signin/index'); ?>">登录</a>
						</li>

					</ul>

				</div>
				<!-- /.navbar-collapse -->
			</div>
			<!-- /.container-fluid -->
		</nav>
		<!--顶部导航栏结束-->
		<div class="register-title container-fluid">
			<h3>欢迎注册锦众科技</h3>
		</div>
		<!--顶部导航栏结束-->
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-4">
					<!--<div class="form-horizontal">-->
					<form class="form-horizontal" action="register" method="post">

						<div class="form-group has-feedback">
							<label for="inputname" class=" control-label"></label>
							<div class="col-sm-12">
								<input type="text" class=" form-control " name="inputName" id="inputName" placeholder="请输入用户名" data-container="body" data-placement="right" data-trigger="manual" data-html="true" data-content="<ul><li>5-25个字符</li></ul>">

								<span class="glyphicon  form-control-feedback" aria-hidden="true"></span>
								<span id="helpName" class="help-block">请输入合法用户名</span>
							</div>
						</div>
						<div class="form-group has-feedback">
							<label for="inputPassword1" class=" control-label"></label>
							<div class="col-sm-12">
								<input type="password" class="form-control" name="inputPassword1" id="inputPassword1" placeholder="设置你的登录密码" data-container="body" data-placement="right" data-trigger="manual" data-html="true" data-content="<ul><li>6-20个字符</li></ul>">

								<span class="glyphicon  form-control-feedback" aria-hidden="true"></span>
								<span id="helpPassword1" class="help-block">请输入合法密码</span>
							</div>
						</div>
						<div class="form-group has-feedback">
							<label for="inputPassword2" class=" control-label"></label>
							<div class="col-sm-12">
								<input type="password" class="form-control " name="inputPassword2" id="inputPassword2" placeholder="请再次输入你的密码" data-container="body" data-placement="right" data-trigger="manual" data-html="true" data-content="<ul><li>请再次输入你的密码</li></ul>">

								<span class="glyphicon  form-control-feedback" aria-hidden="true"></span>
								<span id="helpPassword2" class="help-block">两次密码不一致</span>
							</div>
						</div>

						<div class="form-group has-feedback">
							<label for="inputCode" class=" control-label"></label>
							<div class="col-sm-6 ">
								<div id="slider" class="slider"></div>

							</div>
						</div>
						<!--<div class="form-group has-feedback">
							<label for="inputCode" class=" control-label"></label>
							<div class="col-sm-9">
								<input type="text" class="form-control " id="inputCode" placeholder="请输入验证码"
            
							<span class="glyphicon  form-control-feedback" aria-hidden="true"></span>
							<span id="helpCode" class="help-block">验证码错误</span>
							</div>
						</div>-->
						<div class="form-group form-group-sub">
							<label for="inputSubmit" class="control-label"></label>
							<div class=" col-sm-6">
								<button type="submit" class="disabled btn btn-info register-button" id="inputSubmit">立即注册</button>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-6">
								<div class="checkbox">
									<label>
          <!--<input type="checkbox" class="register-checka">-->
          <p>点击“立即注册”即表示同意并遵守
          <a> 《锦众科技网站服务条款》</a> </p>
          <!--<span>|</span><a>《法律声明和隐私权政策》 </a>-->
        </label>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>

		<!--注册主体结束 -->
		<!--注册底部-->
		<div class="footer text-center">
			<p>
				<a href="http://www.gizwits.com">锦众首页</a> |
				<a href="http://www.gizwits.com/about-us" target="_blank">关于我们</a> |
				<a href="https://docs.gizwits.com" target="_blank">常见问题</a> |
				<a href="/static/components/common/gizwits_user_agreement.c9c9d6fb2c83.pdf" target="_blank">服务协议</a>
			</p>

			<p class="copyright">
				©2011-2017; Gizwits IoT Technology Co., Ltd.
				<a href="http://www.miitbeian.gov.cn/" target="_blank">粤ICP备11090211号</a>
				<a href="#lang-zh-cn" onclick="ChangeLang('zh-cn')">简体中文</a> |
				<a href="#lang-en" onclick="ChangeLang('en')">English</a>
			</p>
		</div>
	</body>
	<script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
	<script>
		window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')
	</script>
	<script src="__STATIC__/index/js/bootstrap.min.js"></script>
	<script src="__STATIC__/index/js/register.js"></script>
	<script src="__STATIC__/index/js/jquery.slider.min.js"></script>
</html>