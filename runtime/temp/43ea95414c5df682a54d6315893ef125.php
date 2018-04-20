<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:74:"C:\wnmp\nginx\html\tp5\public/../application/index\view\signin\signin.html";i:1513906328;}*/ ?>
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

		<link href="__STATIC__/index/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
		<!--<link href="__STATIC__/index/css/offcanvas.css" rel="stylesheet">-->
		<link href="__STATIC__/index/css/signin.css" rel="stylesheet">
		<link href="__STATIC__/index/css/canvas.css" rel="stylesheet">

	</head>

	<body>
		<canvas>
    <!--不支持才会显示以下信息，支持的话就不显示了-->
    您的浏览器不支持Canvas
</canvas>
		<div class="container-fluid">
			<div class="signin-box">

				<form class="form-horizontal" action="<?php echo url('Signin/doSignin'); ?>" method="post">
					<div class="form-group">
						<div class="">
							<input name="uname" type="text" class="form-control" id="uname" placeholder="请输入用户名">
						</div>
					</div>
					<div class="form-group">
						<div class="">
							<input name="pword" type="password" class="form-control" id="pword" placeholder="请输入密码">
						</div>
					</div>
					<div class="form-group">
						<div class="">
							<button type="submit" class="btn btn-info" id="signin">登录</button>
						</div>
					</div>
				</form>
				<p>还没有锦众帐号？<a href="<?php echo url('register/index'); ?>">立即注册</a></p>
			</div>
			<div class="text-box">
				<h2>厦门锦众科技有限公司</h2>
				<p>厦门锦众科技有限公司，位于海上花园—厦门市翔安区，是拥有多项自主知识产权的高科技企业。</p><p> 核心团队长期从事光伏产品相关研究，具有丰厚的太阳能灯具、太阳能休闲设施、光伏发电、机械制造等专业技术研发和实际工程经验积累，系本领域资深工程师。主要业务处于国内领先水平。</p>
				<p>以清洁能源，尤其是太阳能、风能为主要方向的国家能源战略，将迎来10年黄金发展期。厦门锦众科技有限公司期待和您一起为我国的生态可持续发展做出贡献。</p>
				
			</div>
		</div>
	</body>
	<script src="__STATIC__/index/js/jquery-3.2.1.min.js"></script>
	<script src="__STATIC__/index/js/bootstrap.min.js"></script>
	<script src="__STATIC__/index/js/ie-emulation-modes-warning.js"></script>
	<script src="__STATIC__/index/js/signin.js"></script>
	<script src="__STATIC__/index/js/canvas.js"></script>

</html>