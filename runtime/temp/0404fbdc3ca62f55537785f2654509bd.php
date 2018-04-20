<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:75:"C:\wnmp\nginx\html\tp5\public/../application/index\view\group\addgroup.html";i:1516085359;}*/ ?>
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
		<link href="__STATIC__/index/css/clicon.css" rel="stylesheet">
		<link href="__STATIC__/index/css/group.css" rel="stylesheet">
	</head>
	<style>
		.project-wrap {
			margin-top: 30px;
		}
		
		.project-title {
			border-bottom: 2px solid rgb(15, 25, 42);
			text-indent: 4;
			margin-bottom: 20px;
		}
	</style>

	<body>
		<!--顶部导航栏-->

		<?php echo widget('Common/headerFluit'); ?>
		<!--顶部导航栏结束-->
		<div class="container project-wrap">
			<div class="row project-title">
				<h4>添加分组：</h4>
			</div>
			<div class="row">
				<div class="col-sm-12 col-md-8 col-lg-7 col-md-offset-1 col-lg-offset-2">
					<form class="form-horizontal" action="addGroup" method="post">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">分组名：</label>
							<div class="col-sm-10">
								<input type="text" name="gname" class="form-control" id="" placeholder="请输入您的分组名称">
							</div>
						</div>

						<div class="form-group">
							<label for="" class="col-sm-2 control-label">分组简介：</label>
							<div class="col-sm-10">
								<textarea name="gintro" class="form-control" rows="3" id="" placeholder="您可以简要描述该分组"></textarea>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">组内操作：</label>
							<div class="col-sm-10">
								<div class="dropdown">
									<button class="btn btn-default dropdown-toggle form-control" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
    您可以自定义组内可执行的操作
    <span class="caret"></span>
  </button>
									<ul class="dropdown-menu" aria-labelledby="dropdownMenu1" style="width: 100%;padding: 3px 20px;">
										<li>
											<div class="checkbox">
												<label>
    <input type="checkbox" name="goperate[]" value="a">
    Option one is this and that
  </label>
											</div>
										</li>
										<li>
											<div class="checkbox">
												<label>
    <input type="checkbox" name="goperate[]" value="s">
    Option that&mdash;be sure 
  </label>
											</div>
										</li>
										<li>
											<div class="checkbox">
												<label>
    <input type="checkbox" name="goperate[]" value="d">
    and that&mdash; it's great
  </label>

											</div>
										</li>
										<li>
											<div class="checkbox">
												<label>
    <input type="checkbox" name="goperate[]" value="f">
     why it's great
  </label>

											</div>
										</li>
									</ul>
								</div>

							</div>
						</div>
						<!--<div class="form-group">
							<label for="" class="col-sm-2 control-label">添加设备：</label>

							<div class="col-sm-5">
								<input type="number" min="0" name="gstart" class="form-control" id="" placeholder="请输入开始设备编号">
							</div>
							<div class="col-sm-5">
								<input type="number" min="0" name="gend" class="form-control" id="" placeholder="请输入结束设备编号">
							</div>

							<p class="help-block col-sm-10 col-sm-offset-2">注：结束设备编号默认等于开始设备编号，即添加单个设备.</p>

						</div>
						<div class="form-group">
							<div class="col-sm-offset-2 col-sm-10">
								<button type="submit" class="pull-right btn btn-primary">确认添加</button>
							</div>
						</div>-->
					</form>
				</div>

				<div class="edit-wrap col-sm-12 col-md-8 col-lg-7 col-md-offset-1 col-lg-offset-2">
					<div class="col-xs-9 col-sm-9" style="border-right: 1px solid #ccc;">
						<div class="col-xs-9 col-sm-9">
							<div class="col-xs-12 col-sm-12">
								<input type="number" min="0" name="" class="form-control" id="" placeholder="请输入单个设备编号">
							</div>
						</div>
						<div class="col-xs-3 col-sm-3">
							<div class="col-xs-12 col-sm-12">
								<button class="btn btn-sm btn-primary">添加</button>
							</div>
						</div>
						<div class="col-sm-12 col-xs-12">
							<div class="col-sm-2">
								<span>产品：</span>
							</div>
							<div class="col-sm-10">
								<ul class="list-unstyled list-inline ">
									<li>垃圾桶</li>
									<li>垃圾桶</li>
									<li>垃圾桶</li>
								</ul>
							</div>
						</div>
						<div class="col-sm-12 col-xs-12">
							<div class="col-sm-2">
								<span>位置：</span>
							</div>
							<div class="col-sm-10">
<?php echo widget('Cpct/index'); ?>
							</div>
						</div>

						<div class="col-sm-12 col-xs-12 device-wrap1">
							<div class=" device-box1">
								<div class="col-sm-1 col-xs-1">
									<input type="checkbox" name="" id="" value="" />
								</div>
								<div class="col-sm-2 col-xs-2" style="padding-right: 0;">
									<p>00100010</p>
								</div>
								<div class="col-sm-3 col-xs-3" style="padding-right: 0;">
									<p>智能语言垃圾桶</p>
								</div>
								<div class="col-sm-6 col-xs-6">
									<p>说说说树搜索算法说说说树搜索算法</p>
								</div>
							</div>
							<div class=" device-box1">
								<div class="col-sm-1 col-xs-1">
									<input type="checkbox" name="" id="" value="" />
								</div>
								<div class="col-sm-2 col-xs-2" style="padding-right: 0;">
									<p>00100010</p>
								</div>
								<div class="col-sm-3 col-xs-3" style="padding-right: 0;">
									<p>智能语言垃圾桶</p>
								</div>
								<div class="col-sm-6 col-xs-6">
									<p>说说说树搜索算法说说说树搜索算法</p>
								</div>
							</div>
							<div class=" device-box1">
								<div class="col-sm-1 col-xs-1">
									<input type="checkbox" name="" id="" value="" />
								</div>
								<div class="col-sm-2 col-xs-2" style="padding-right: 0;">
									<p>00100010</p>
								</div>
								<div class="col-sm-3 col-xs-3" style="padding-right: 0;">
									<p>智能语言垃圾桶</p>
								</div>
								<div class="col-sm-6 col-xs-6">
									<p>说说说树搜索算法说说说树搜索算法</p>
								</div>
							</div>
							<div class=" device-box1">
								<div class="col-sm-1 col-xs-1">
									<input type="checkbox" name="" id="" value="" />
								</div>
								<div class="col-sm-2 col-xs-2" style="padding-right: 0;">
									<p>00100010</p>
								</div>
								<div class="col-sm-3 col-xs-3" style="padding-right: 0;">
									<p>智能语言垃圾桶</p>
								</div>
								<div class="col-sm-6 col-xs-6">
									<p>说说说树搜索算法说说说树搜索算法</p>
								</div>
							</div>
							<div class=" device-box1">
								<div class="col-sm-1 col-xs-1">
									<input type="checkbox" name="" id="" value="" />
								</div>
								<div class="col-sm-2 col-xs-2" style="padding-right: 0;">
									<p>00100010</p>
								</div>
								<div class="col-sm-3 col-xs-3" style="padding-right: 0;">
									<p>智能语言垃圾桶</p>
								</div>
								<div class="col-sm-6 col-xs-6">
									<p>说说说树搜索算法说说说树搜索算法</p>
								</div>
							</div>
							<div class=" device-box1">
								<div class="col-sm-1 col-xs-1">
									<input type="checkbox" name="" id="" value="" />
								</div>
								<div class="col-sm-2 col-xs-2" style="padding-right: 0;">
									<p>00100010</p>
								</div>
								<div class="col-sm-3 col-xs-3" style="padding-right: 0;">
									<p>智能语言垃圾桶</p>
								</div>
								<div class="col-sm-6 col-xs-6">
									<p>说说说树搜索算法说说说树搜索算法</p>
								</div>
							</div>
							<div class=" device-box1">
								<div class="col-sm-1 col-xs-1">
									<input type="checkbox" name="" id="" value="" />
								</div>
								<div class="col-sm-2 col-xs-2" style="padding-right: 0;">
									<p>00100010</p>
								</div>
								<div class="col-sm-3 col-xs-3" style="padding-right: 0;">
									<p>智能语言垃圾桶</p>
								</div>
								<div class="col-sm-6 col-xs-6">
									<p>说说说树搜索算法说说说树搜索算法</p>
								</div>
							</div>
							<div class=" device-box1">
								<div class="col-sm-1 col-xs-1">
									<input type="checkbox" name="" id="" value="" />
								</div>
								<div class="col-sm-2 col-xs-2" style="padding-right: 0;">
									<p>00100010</p>
								</div>
								<div class="col-sm-3 col-xs-3" style="padding-right: 0;">
									<p>智能语言垃圾桶</p>
								</div>
								<div class="col-sm-6 col-xs-6">
									<p>说说说树搜索算法说说说树搜索算法</p>
								</div>
							</div>
							<div class=" device-box1">
								<div class="col-sm-1 col-xs-1">
									<input type="checkbox" name="" id="" value="" />
								</div>
								<div class="col-sm-2 col-xs-2" style="padding-right: 0;">
									<p>00100010</p>
								</div>
								<div class="col-sm-3 col-xs-3" style="padding-right: 0;">
									<p>智能语言垃圾桶</p>
								</div>
								<div class="col-sm-6 col-xs-6">
									<p>说说说树搜索算法说说说树搜索算法</p>
								</div>
							</div>
							<div class=" device-box1">
								<div class="col-sm-1 col-xs-1">
									<input type="checkbox" name="" id="" value="" />
								</div>
								<div class="col-sm-2 col-xs-2" style="padding-right: 0;">
									<p>00100010</p>
								</div>
								<div class="col-sm-3 col-xs-3" style="padding-right: 0;">
									<p>智能语言垃圾桶</p>
								</div>
								<div class="col-sm-6 col-xs-6">
									<p>说说说树搜索算法说说说树搜索算法</p>
								</div>
							</div>
						</div>

						<div class="col-sm-12 col-xs-12 text-align-center">
							<button class="btn btn-sm btn-primary">添加勾选</button>

						</div>
					</div>
					<div class="col-xs-3 col-sm-3">
						<div class="col-sm-12 col-xs-12 text-align-center">
							<h4>已选设备</h4>
						</div>

						<div class="col-sm-12 col-xs-12 device-wrap2">
							<div class="device-box2">
								<div class="col-sm-3 col-xs-3">
									<input type="checkbox" name="" id="" value="" />
								</div>
								<div class="col-sm-8 col-xs-8">
									<p>00100010</p>
								</div>
							</div>
						</div>

						<div class="col-sm-12 col-xs-12 text-align-center">
							<button class="btn btn-sm btn-primary">从已选中删除</button>

						</div>

					</div>
				</div>

			</div>
		</div>
		</div>
	</body>
	<script src="__STATIC__/index/js/jquery-3.2.1.min.js"></script>
	<script src="__STATIC__/index/js/bootstrap.min.js"></script>
	<script src="__STATIC__/index/js/header.js"></script>


</html>