<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:88:"C:\wnmp\nginx\html\tp5\public/../application/index\view\overview\overview_white_map.html";i:1514166906;}*/ ?>
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

		<link href="__STATIC__/index/css/offcanvas.css" rel="stylesheet">
		<link href="__STATIC__/index/css/header_fluit.css" rel="stylesheet">
		<link href="__STATIC__/index/css/overview_white.css" rel="stylesheet">

		<link href="http://cache.amap.com/lbs/static/main1119.css" rel="stylesheet"/>
		<link href="__STATIC__/index/css/map.css" rel="stylesheet">
		<link href="__STATIC__/index/css/map_overview.css" rel="stylesheet">
		<link href="__STATIC__/index/css/clicon.css" rel="stylesheet">
	</head>

	<body>
		<!--顶部导航栏-->
		<?php echo widget('Common/headerFluit'); ?>

		<!--顶部导航栏结束-->

		<div class="container overview-body">
			<!--综述-->
			<h5>设备综述</h5>
			<div class="container-wrap">
				<div class="row">
					<!--<div class="col-md-2">-->
					<div class="num-box">
						<a href="../Lists?dtype=dal" target="_blank">
							<span>设备数</span>
							<span class="overview-num item-num home-text-senior text-info ng-binding"><?php echo $numall; ?></span>
						</a>
					</div>
					<!--</div>-->
					<!--<div class="col-md-2">-->
					<div class="num-box">
						<a href="../Lists?dtype=don" target="_blank">
							<span>在线数</span>
							<span class="overview-num item-num home-text-senior text-success ng-binding"><?php echo $numonl; ?></span>
						</a>
					</div>
					
					<!--</div>-->
					<!--<div class="col-md-2">-->
					<div class="num-box">
						<a href="../Lists?dtype=dful" target="_blank">
							<span>桶满数</span>
							<span class="overview-num item-num home-text-senior text-danger ng-binding"><?php echo $numful; ?></span>
						</a>
					</div>
					<!--</div>-->
					<!--<div class="col-md-2">-->
					<div class="num-box">
						<a href="../Lists?dtype=der" target="_blank">
							<span>异常数</span>
							<span class="overview-num item-num home-text-senior text-danger ng-binding"><?php echo $numerr; ?></span>
						</a>
					</div>
					<!--</div>-->
					<!--<div class="col-md-2">-->
					<div class="num-box">
						<a href="../Lists?dtype=dda" target="_blank">
							<span>报警数</span>
							<span class="overview-num item-num home-text-senior text-danger ng-binding"><?php echo $numdan; ?></span>
						</a>
					</div>
					<!--</div>-->
				
				</div>
			</div>
			<!--综述结束-->
			<!--切换地图标记点选项组-->
			<h5>设备分布</h5>
			<div class="row">
				<ul class="nav nav-tabs nav-justified button-map">
					<li role="presentation" class="active">
						<a id="map_online" class="activem">在线设备</a>
					</li>
					<li role="presentation">
						<a id="map_full" class="">桶满设备</a>
					</li>
					<li role="presentation">
						<a id="map_smoke" class="">烟雾报警设备</a>
					</li>
					<li role="presentation">
						<a id="map_tem" class="">温度报警设备</a>
					</li>
					<li role="presentation">
						<a id="map_switch" class="">开关报警设备</a>
					</li>
				</ul>
			</div>
			<!--切换地图标记点选项组结束-->
			<!--地图-->
			<div class="row">
				<div class="col-md-12">
					<div class="map-box">
						<div id="map_wrap"></div>
					</div>
				</div>
			</div>
			<!--地图结束-->

		</div>

	</body>
	<script src="__STATIC__/index/js/jquery-3.2.1.min.js"></script>
	<script src="__STATIC__/index/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="http://webapi.amap.com/maps?v=1.4.1&key=4e8d9a6aed5424c709d4a60789ab7762"></script>
	<script type="text/javascript" src="http://cache.amap.com/lbs/static/addToolbar.js"></script>
	<script src="__STATIC__/index/js/ie-emulation-modes-warning.js"></script>
	<script src="__STATIC__/index/js/header.js"></script>
	<script src="__STATIC__/index/js/map_overview.js"></script>

</html>