<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:74:"C:\wnmp\nginx\html\tp5\public/../application/index\view\member\member.html";i:1515726784;}*/ ?>
<!DOCTYPE html>
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
		<link href="__STATIC__/index/css/bootstrap.min.css" rel="stylesheet">
		<link href="__STATIC__/index/css/offcanvas.css" rel="stylesheet">
		<link href="__STATIC__/index/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
		<link href="__STATIC__/index/css/header_fluit.css" rel="stylesheet">
		<link href="__STATIC__/index/css/single.css" rel="stylesheet">
		<link href="__STATIC__/index/css/single_control.css" rel="stylesheet">
		<link href="__STATIC__/index/css/clicon.css" rel="stylesheet">
		<link href="__STATIC__/index/css/member_info.css" rel="stylesheet">
	</head>

	<body>
		<!--顶部导航栏-->

		<?php echo widget('Common/headerFluit'); ?>
		<!--顶部导航栏结束-->
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-2 col-xs-1 left-sidebar nav">
					<ul class="list-group">

						<li class="list-group-item hand" id="infor">
							<span class="glyphicon glyphicon-asterisk" aria-hidden="true"></span> 用户信息
						</li>
					
						<li class="list-group-item hand" id="rmb">
							<span class="glyphicon glyphicon-jpy" aria-hidden="true"></span> 服务费用管理
						</li>

						<li class="list-group-item hand" id="account">
							<span class="glyphicon glyphicon-cog" aria-hidden="true"></span>帐号管理
						</li>
						<li class="list-group-item hand" id="feedback">
							<span class="glyphicon glyphicon-edit" aria-hidden="true"></span>问题反馈
						</li>
					</ul>

				</div>

				<div class="col-md-10 col-md-offset-2 col-xs-11 col-xs-offset-1 right-area">

				</div>
			</div>
		</div>
	</body>
	<script src="__STATIC__/index/js/jquery-3.2.1.min.js"></script>
	<script src="__STATIC__/index/js/bootstrap.min.js"></script>
	<script src="__STATIC__/index/js/header.js"></script>
	<script>
		$(function() {
			//点击左侧导航动态加载右侧显示面板内容
			$(".left-sidebar .list-group-item").click(function() {
				var sidebarid = $(this).attr("id");
				$.post("<?php echo url('Member/rightArea'); ?>", {
						type: sidebarid
					},
					function(data) {
						$(".right-area").html(data);
					});
			})

		})
	</script>

</html>