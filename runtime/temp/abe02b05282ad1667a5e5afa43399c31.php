<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:72:"C:\wnmp\nginx\html\tp5\public/../application/index\view\batch\batch.html";i:1520922848;}*/ ?>
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
		<link href="__STATIC__/index/css/offcanvas.css" rel="stylesheet">
		<link href="__STATIC__/index/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
		<link href="__STATIC__/index/css/header_fluit.css" rel="stylesheet">
		<link href="__STATIC__/index/css/batch.css" rel="stylesheet">

	</head>

	<body>
		<?php echo widget('Common/headerFluit'); ?>
		<div class="container-fluid breadnav-wrap">
			<div class="container">
				<!--顶部结束-->
				<!--面包屑导航-->
				<div class="row breadnav">
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
						<ol class="breadcrumb">
							<li>
								<a href="<?php echo url('Index/index'); ?>" target="_blank">锦众科技首页</a>
							</li>
							<li>
								<a href="<?php echo url('Project/index'); ?>" target="_blank">项目管理</a>
							</li>
							<li class="active">高级搜索</li>
						</ol>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
						<div class="input-group">
							<input type="text" class="form-control" placeholder="请输入设备编号">
							<span class="input-group-btn">
        <button class="btn" type="button">搜索</button>
      </span>
						</div>
						<!-- /input-group -->
					</div>
				</div>

				<!--面包屑结束-->
			</div>

			<!--线-->
			<div class="divide-wrap">
				<div class="colorbar-before"></div>
				<div class="colorbar-after"></div>
				<div class="colorbar"></div>
			</div>
			<!--线结束-->
		</div>
		<div class="container">

			<!--筛选条件-->
			<div class="row filters">

				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 filters-title">
					<h4>筛选条件 <button class="btn btn-sm pull-right btn-search">确认查询</button></h4>
				</div>
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 filters-middle">
					<span>设备类型：</span>
					<ul class="list-unstyled list-inline list-hover">
						<li>垃圾桶</li>
						<li>垃圾桶</li>
						<li>垃圾桶</li>
					</ul>
				</div>
				<div class="f-position col-sm-12 col-xs-12">
					<span>设备位置：</span>
					<ul class="list-unstyled list-inline">
						<li><span class="input-border">
							<select name="" id="" disabled>
								<option value="">中国</option>
							</select></span>
						</li>
						<li><span class="input-border">
							<select name="province" id="province">
								<option value="">省份/直辖市</option>
								<?php foreach($data as $v): if($v['parent_id'] == 1): ?>
								<option value="<?php echo $v['area_id']; ?>" name="pp"><?php echo $v['area_name']; ?></option>
								<?php endif; endforeach; ?>
							</select></span>
						</li>
						<li><span class="input-border">
							<select name="city" id="city">
								<option value="">市/县</option>

							</select></span>
						</li>

						<li><span class="input-border">
							<select name="town" id="town">
								<option value="">镇/区</option>
							</select></span>
						</li>
						<li><span class="input-border">
							<input type="text" name="addr" id="addr" placeholder="请输入街道信息等详细地址"></span></li>
					</ul>
				</div>

			</div>
			<!--筛选条件结束-->
			<!--可选操作-->
			<div class="row filters">
				<div class="col-sm-12 col-xs-12 filters-title">
					<h4>可选操作    </h4>
				</div>
				<div class="col-sm-12 col-xs-12 ">
					<span>可选操作：</span>
					<ul class="list-unstyled list-inline list-hover operateBar">
						<li>开灯</li>
						<li>关灯</li>
						<li>垃圾桶</li>
						<li>
							<p class="text-muted" type="text" name="batch_result" id="batch_result" placeholder="">正在处理……</p>
						</li>
					</ul>
				</div>
			</div>
			<!--可选操作结束-->
			<!--符合条件设备列表-->
			<div class="row results">
				<div class="col-sm-12 col-xs-12 filters-title">
					<h4>查询结果    </h4>
				</div>
				<div class="col-sm-12 col-xs-12">
					<div class="table-wrap">
						<!--表格-->
						<table class="table table-bordered table-striped table-hover" border="" cellspacing="" cellpadding="">
							<tr>
								<th><input type="checkbox" class="checkbox" id="toggle_all" value="option1"></input>
								</th>
								<th>
									<p>设备编号</p>
								</th>
								<th>
									<p>所属产品</p>
								</th>
								<th>
									<p>设备地址</p>
								</th>
								<th>
									<p>上线时间</p>
								</th>
								<th>
									<p>操作</p>
								</th>
							</tr>
						</table>
						<div class='box box1' id='wrapper1'>
							<table class="scroll table table-bordered table-hover" id="scrollOne">
								<tr>
									<td><input type="checkbox" class="checkbox" value="option1"></input>
									</td>
									<td>
										<p>00998810</p>
									</td>
									<td>
										<p>垃圾桶</p>
									</td>
									<td>
										<p>翔安巷北工业区65号</p>
									</td>
									<td>
										<p> 2018-2-5 08:47:53</p>
									</td>
									<td><button class="tosingle btn btn-xs btn-primary">查看详情</button></td>
								</tr>
								<tr>
									<td><input type="checkbox" class="checkbox" value="option1"></input>
									</td>
									<td>
										<p>00998810</p>
									</td>
									<td>
										<p>垃圾桶</p>
									</td>
									<td>
										<p>翔安巷北工业区65号</p>
									</td>
									<td>
										<p> 2018-2-5 08:47:53</p>
									</td>
									<td><button class="tosingle btn btn-xs btn-primary">查看详情</button></td>
								</tr>
								<tr>
									<td><input type="checkbox" class="checkbox" value="option1"></input>
									</td>
									<td>
										<p>00998810</p>
									</td>
									<td>
										<p>垃圾桶</p>
									</td>
									<td>
										<p>翔安巷北工业区65号</p>
									</td>
									<td>
										<p> 2018-2-5 08:47:53</p>
									</td>
									<td><button class="tosingle btn btn-xs btn-primary">查看详情</button></td>
								</tr>
								<tr>
									<td><input type="checkbox" class="checkbox" value="option1"></input>
									</td>
									<td>
										<p>00998810</p>
									</td>
									<td>
										<p>垃圾桶</p>
									</td>
									<td>
										<p>翔安巷北工业区65号</p>
									</td>
									<td>
										<p> 2018-2-5 08:47:53</p>
									</td>
									<td><button class="tosingle btn btn-xs btn-primary">查看详情</button></td>
								</tr>
								<tr>
									<td><input type="checkbox" class="checkbox" value="option1"></input>
									</td>
									<td>
										<p>00998810</p>
									</td>
									<td>
										<p>垃圾桶</p>
									</td>
									<td>
										<p>翔安巷北工业区65号</p>
									</td>
									<td>
										<p> 2018-2-5 08:47:53</p>
									</td>
									<td><button class="tosingle btn btn-xs btn-primary">查看详情</button></td>
								</tr>
								<tr>
									<td><input type="checkbox" class="checkbox" value="option1"></input>
									</td>
									<td>
										<p>00998810</p>
									</td>
									<td>
										<p>垃圾桶</p>
									</td>
									<td>
										<p>翔安巷北工业区65号</p>
									</td>
									<td>
										<p> 2018-2-5 08:47:53</p>
									</td>
									<td><button class="tosingle btn btn-xs btn-primary">查看详情</button></td>
								</tr>
								<tr>
									<td><input type="checkbox" class="checkbox" value="option1"></input>
									</td>
									<td>
										<p>00998810</p>
									</td>
									<td>
										<p>垃圾桶</p>
									</td>
									<td>
										<p>翔安巷北工业区65号</p>
									</td>
									<td>
										<p> 2018-2-5 08:47:53</p>
									</td>
									<td><button class="tosingle btn btn-xs btn-primary">查看详情</button></td>
								</tr>
								<tr>
									<td><input type="checkbox" class="checkbox" value="option1"></input>
									</td>
									<td>
										<p>00998810</p>
									</td>
									<td>
										<p>垃圾桶</p>
									</td>
									<td>
										<p>翔安巷北工业区65号</p>
									</td>
									<td>
										<p> 2018-2-5 08:47:53</p>
									</td>
									<td><button class="tosingle btn btn-xs btn-primary">查看详情</button></td>
								</tr>
							</table>
						</div>
					</div>
				</div>

				<div class="col-sm-12 col-xs-12" style="text-align: center;">
					<!--在这放分页输出那句代码-->
				</div>
			</div>

		</div>

	</body>
	<script src="__STATIC__/index/js/jquery-3.2.1.min.js"></script>
	<script src="__STATIC__/index/js/bootstrap.min.js"></script>
	<script src="__STATIC__/index/js/ie-emulation-modes-warning.js"></script>
	<script src="__STATIC__/index/js/header.js"></script>
	<script src="__STATIC__/index/js/batch.js"></script>
	<script src="__STATIC__/index/js/my_scrollbar.js"></script>

</html>