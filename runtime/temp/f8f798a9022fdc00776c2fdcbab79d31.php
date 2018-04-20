<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:72:"C:\wnmp\nginx\html\tp5\public/../application/index\view\group\group.html";i:1520900045;}*/ ?>
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
		<link href="__STATIC__/index/css/group.css" rel="stylesheet">
		<link href="__STATIC__/index/css/clicon.css" rel="stylesheet">
	</head>

	<body>
		<!--顶部导航栏-->

		<?php echo widget('Common/headerFluit'); ?>
		<!--顶部导航栏结束-->
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-2 col-xs-1 left-sidebar nav">
					<ul class="list-group">

						<li class="list-group-item hand js-sidenav" id="infor">
							<span class="glyphicon glyphicon-list" aria-hidden="true"></span> 分组详情
						</li>
						<li class="list-group-item hand js-sidenav" id="lis">
							<span class="glyphicon glyphicon-option-vertical" aria-hidden="true"></span> 组内设备
						</li>

						<li class="list-group-item hand js-sidenav" id="control">
							<span class="glyphicon glyphicon-cog" aria-hidden="true"></span> 组内控制
						</li>

						<li class="list-group-item hand js-sidenav" id="edit">
							<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>编辑分组
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
	<script src="__STATIC__/index/js/group.js"></script>
	<script>
		$(function() {
			//点击左侧导航动态加载右侧显示面板内容
			$(".left-sidebar .js-sidenav").click(function() {
				var sidebarid = $(this).attr("id");
				$.post("<?php echo url('Group/rightArea'); ?>", {
						type: sidebarid
					},
					function(data) {
						//				alert("Data Loaded: " + data);
						$(".right-area").html(data);
					});
			})
			//左侧导航样式

			$(".left-sidebar .list-group-item").hover(function() {
				$(this).addClass("active");
			}, function() {
				$(this).removeClass("active");
			})
			$(".left-sidebar .list-group-item").click(function() {
				$(".left-sidebar .list-group-item").removeClass("active-click");
				$(this).addClass("active-click");

			})
		})
	</script>

</html>