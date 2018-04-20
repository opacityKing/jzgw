<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:74:"C:\wnmp\nginx\html\tp5\public/../application/admin\view\orders\orders.html";i:1516935967;}*/ ?>
<!DOCTYPE html>
<html lang="zh-CN">

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
		<link href="__STATIC__/index/css/offcanvas.css" rel="stylesheet">
		<link href="__STATIC__/index/css/header_fluit.css" rel="stylesheet">
	</head>
	<style>
		.orders-wrap {
			margin-top: 30px;
		}
		
		.orders-title {
			border-bottom: 2px solid rgb(15, 25, 42);
			text-indent: 4;
			margin-bottom: 20px;
		}
		.line{
			width: 100%;
			height: 1px;
			/*background: #666;*/
			border-bottom: dashed 1px #666;
			margin: 2rem 0;
		}
	</style>

	<body>
		<!--顶部导航栏-->

		<?php echo widget('Common/header'); ?>
		<!--顶部导航栏结束-->
		<div class="container orders-wrap">
			<div class="row orders-title">
				<h4>工单详情：</h4>
			</div>
			<div class="row">

				<div class="col-sm-12 form-wrap">
					<form class="form-horizontal" action="order/order" method="post">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">工单号：</label>
							<div class="col-sm-10">
								<input type="text" name="num" class="form-control" id="" placeholder="23456797534">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">工单标题：</label>
							<div class="col-sm-10">
								<input type="text" name="title" class="form-control" id="" placeholder="简要说明问题，比如路灯故障等">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">工单内容：</label>
							<div class="col-sm-10">
								<textarea name="content" class="form-control" rows="3" id="" placeholder="请详细说明问题，设备故障请说明设备号及故障现象等"></textarea>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label">优先级：</label>
							<div class="col-sm-10">
								<label class="radio-inline">
  <input type="radio" name="priority" id="normal" value="option1"> 一般
</label>
								<label class="radio-inline">
  <input type="radio" name="priority" id="urgent" value="option2"> 紧急
</label>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">状态：</label>
							<div class="col-sm-10">
								<select name="status" class="form-control" id="">
									<option value="">未处理</option>
									<option value="">已处理</option>
								</select>
								
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">联系方式：</label>
							<div class="col-sm-10">
								<input type="tel" name="phone" class="form-control" id="" placeholder="请输入您的联系方式">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">添加日期：</label>
							<div class="col-sm-10">
								<input class="form-control" name="sel_date" type="date" value="2018-12-25"/>
							</div>
						</div>
						<p class="line"></p>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">接单人：</label>
							<div class="col-sm-10">
								<input type="text" name="person" class="form-control" id="" placeholder="大✿">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">处理结果：</label>
							<div class="col-sm-10">
								<textarea name="result" class="form-control" rows="3" id="" placeholder="请详细说明问题，设备故障请说明设备号及故障现象等"></textarea>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-12" style="text-align: center;">
								<button type="submit" class=" btn btn-warning">修改工单</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
		</div>
	</body>
	<script src="__STATIC__/index/js/jquery-3.2.1.min.js"></script>
	<script src="__STATIC__/index/js/bootstrap.min.js"></script>
	<script src="__STATIC__/index/js/header.js"></script>

</html>