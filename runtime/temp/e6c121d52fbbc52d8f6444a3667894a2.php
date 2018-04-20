<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:72:"C:\wnmp\nginx\html\tp5\public/../application/admin\view\index\index.html";i:1516937964;}*/ ?>
<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8">
		<meta name="description" content="Dashboard">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

		<title>锦众科技</title>

		<link rel="shortcut icon" href="__STATIC__/index/img/logo.png" type="image/vnd.microsoft.icon">
		<link rel="icon" href="__STATIC__/index/img/logo.png" type="image/vnd.microsoft.icon">

		<!--Basic Styles-->
		<link href="__STATIC__/index/css/bootstrap.min.css" rel="stylesheet">
		<link href="__STATIC__/index/css/header_fluit.css" rel="stylesheet">
		<style type="text/css">
			.page-wrap {
				width: 700px;
				height: 500px;
				margin: 0 auto;
				margin-top: 100px;
			}
			
			.page-one {
				display: inline-block;
				width: 300px;
				height: 200px;
				text-align: center;
				line-height: 200px;
				margin: 20px;
				font-size: 22px;
				font-weight: 500;
			}
			
			.page-one a {
				color: #fff;
			}
			
			.admin {
				background: rgb(221, 32, 37);
			}
			
			.alarm {
				background: rgb(56, 170, 75);
			}
			
			.orders {
				background: rgb(33, 140, 188);
			}
			
			.modals {
				background: rgb(244, 203, 32);
			}
		</style>
	</head>

	<body>
		<!-- 头部 -->
		<?php echo widget('Common/header'); ?>
		<!-- /头部 -->

		<div class="main-container container-fluid">
			<div class="page-wrap">
				<div class="page-one admin">
					<a href="<?php echo url('Admin/index'); ?>">用户列表</a>
				</div>
				<div class="page-one alarm">
					<a href="<?php echo url('Alarm/index'); ?>">预报警信息</a>
				</div>
				<div class="page-one orders">
					<a href="<?php echo url('Orders/index'); ?>">工单管理</a>
				</div>
				<div class="page-one modals">
					<a href="<?php echo url('Modals/index'); ?>">模块管理</a>
				</div>
			</div>
		</div>

		<!--Basic Scripts-->
		<script src="__STATIC__/index/js/jquery-3.2.1.min.js"></script>
		<script src="__STATIC__/index/js/header.js"></script>

	</body>

</html>