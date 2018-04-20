<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:70:"C:\wnmp\nginx\html\tp5\public/../application/admin\view\admin\upd.html";i:1516947658;}*/ ?>
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
	</head>
	<style>
		.add-wrap {
			margin-top: 30px;
		}
		
		.add-title {
			border-bottom: 2px solid rgb(15, 25, 42);
			text-indent: 4;
			margin-bottom: 20px;
		}
	</style>

	<body>
		<!--顶部导航栏-->

		<?php echo widget('Common/header'); ?>

		<!--顶部导航栏结束-->
		<div class="container add-wrap">
			<div class="row add-title">
				<h4>编辑用户：</h4>
			</div>
			<div class="row">

				<div class="col-sm-12 form-wrap">
					<form class="form-horizontal" action="order/order" method="post">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">用户名：</label>
							<div class="col-sm-10">
								<input type="text" name="username" class="form-control" id="" value="<?php echo $data['username']; ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">密码：</label>
							<div class="col-sm-10">
								<input type="password" name="pwd" class="form-control" id="" placeholder="简要说明问题，比如路灯故障等">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">工单模块信息：</label>
							<div class="col-sm-10">
								<input type="text" name="" class="form-control" id="" placeholder="简要说明问题，比如路灯故障等">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">用户中心模块信息：</label>
							<div class="col-sm-10">
								<input type="text" name="" class="form-control" id="" placeholder="简要说明问题，比如路灯故障等">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">控制模块信息：</label>
							<div class="col-sm-10">
								<input type="text" name="" class="form-control" id="" placeholder="简要说明问题，比如路灯故障等">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">简介：</label>
							<div class="col-sm-10">
								<textarea name="content" class="form-control" rows="3" id="" placeholder="请详细说明问题，设备故障请说明设备号及故障现象等"></textarea>
							</div>
						</div>

						<div class="form-group">
							<div class="col-sm-12" style="text-align: center;">
								<button type="submit" class=" btn btn-warning">完成编辑</button>
							</div>
						</div>
					</form>
				</div>

			</div>
		</div>
	</body>
	<script src="__STATIC__/index/js/jquery-3.2.1.min.js"></script>
	<script src="__STATIC__/index/js/bootstrap.min.js"></script>
	<script src="__STATIC__/index/js/header.js"></script>

</html>