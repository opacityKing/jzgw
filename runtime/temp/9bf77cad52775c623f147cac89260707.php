<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:74:"C:\wnmp\nginx\html\tp5\public/../application/index\view\single\single.html";i:1520989493;}*/ ?>
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
		<link href="__STATIC__/index/css/single_historical.css" rel="stylesheet">
		<link href="__STATIC__/index/css/single_control.css" rel="stylesheet">
		<link href="__STATIC__/index/css/single_realtime.css" rel="stylesheet">
		<!--<link href="__STATIC__/index/css/single_voltage.css" rel="stylesheet">-->
		<link href="__STATIC__/index/css/single_deviceinfor.css" rel="stylesheet">
		<link href="__STATIC__/index/css/clicon.css" rel="stylesheet">
	</head>

	<body>
		<!--顶部导航栏-->

		<?php echo widget('Common/headerFluit'); ?>
		<!--顶部导航栏结束-->
		<div class="container-fluid single-body">
			<div class="row">
				<div class="col-md-2 col-xs-1 left-sidebar nav">
					<ul class="list-group">
						<li class="list-group-item hand js-sidenav" id="deviceinfor">
							<span class="glyphicon glyphicon-wrench" aria-hidden="true"></span> 设备信息
						</li>
						<li class="list-group-item hand js-sidenav" id="position">
							<span class="glyphicon glyphicon-globe" aria-hidden="true"></span> 地理位置
						</li>
						<li class="list-group-item hand js-sidenav" id="historical">
							<span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> 历史数据
						</li>
						<li class="list-group-item hand js-sidenav" id="realtime">
							<span class="glyphicon glyphicon-option-vertical" aria-hidden="true"></span> 主动查询
						</li>

						<li class="list-group-item hand js-sidenav" id="voltage">
							<span class="glyphicon glyphicon-list" aria-hidden="true"></span> 数据分析
						</li>
						<li class="list-group-item hand js-sidenav" id="control">
							<span class="glyphicon glyphicon-cog" aria-hidden="true"></span> 控制中心
						</li>
						<li>
							<input type="hidden" id="co" value=<?php echo $singledata['coordinate']; ?>>
							<input type="hidden" id="ad" value=<?php echo $singledata['address']; ?>>
							<input type="hidden" id="ty" value=<?php echo $singledata['deviceType']; ?>>
							<input type="hidden" id="ti" value=<?php echo $singledata['addDate']; ?>>
							<input type="hidden" id="na" value=<?php echo $singledata['deviceName']; ?>>
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
	<script src="http://cdn.bootcss.com/bootstrap-hover-dropdown/2.0.10/bootstrap-hover-dropdown.min.js"></script>
	<script src="__STATIC__/index/js/header.js"></script>
	<script src="__STATIC__/index/js/single.js"></script>

</html>