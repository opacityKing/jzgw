<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:74:"C:\wnmp\nginx\html\tp5\public/../application/index\view\project\index.html";i:1514884344;}*/ ?>
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
		<link href="__STATIC__/index/css/project.css" rel="stylesheet">

	</head>

	<body>
		<?php echo widget('Common/headerFluit'); ?>
		<div class="container project-wrap">
			<div class="row project-title">
				<h4>您拥有的项目如下：</h4>
			</div>
			<div class="row">
				<div class="col-md-3 col-split">
					<div class="panel panel-info">
						<!-- Default panel contents -->
						<div class="panel-heading panel-show">
							<span class="project-name" title="白河项目白河项目白河项目白河项目">白河项目白河项目白河项目白河项目</span>
							<a class="pull-right" target="_blank" href="<?php echo url('project/project'); ?>">查看详情</a>
						</div>
						<div class="panel-body panel-show">
							<p class="project-intro">白河项目的备注信息，可包括创建时间、项目说明、进展情况等。白河项目的备注信息，可包括创建时间、项目说明、进展情况等</p>
						</div>

						<!-- List group -->
						<ul class="list-group">
							<li class="list-group-item">
								<a target="_blank" href="<?php echo url('batch/index'); ?>">高级搜索</a>
							</li>
							<li class="list-group-item">
								<a target="_blank" href="<?php echo url('group/index'); ?>">分组</a>
							</li>
							
						</ul>
					</div>
				</div>
				<div class="col-md-3 col-split">

				</div>
				<div class="col-md-3 col-split">

				</div>
				<div class="col-md-3 col-split">

				</div>
	
				
			</div>
		</div>
	</body>
	<script src="__STATIC__/index/js/jquery-3.2.1.min.js"></script>
	<script src="__STATIC__/index/js/bootstrap.min.js"></script>
	<script src="__STATIC__/index/js/ie-emulation-modes-warning.js"></script>
	<script src="__STATIC__/index/js/project.js"></script>
	<script src="__STATIC__/index/js/header.js"></script>

</html>