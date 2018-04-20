<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:82:"C:\wnmp\nginx\html\tp5\public/../application/index\view\member\member_address.html";i:1514359078;}*/ ?>
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
		<link href="__STATIC__/index/css/member_address.css" rel="stylesheet">

	</head>

	<body>
		<?php echo widget('Common/headerFluit'); ?>
		<div class="container">
			<div class="row member-address-title">
				<h4>新增服务地址：</h4>
			</div>
			<div class="row form-wrap">
				<div class="col-sm-12">
					<form class="form-horizontal" action="member/address" method="post">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">所在地区：</label>
							<div class="col-sm-10">
								<ul class="list-unstyled list-inline">
									<li>
										<select name="" id="" disabled class="form-control">
											<option value="">中国</option>
										</select>
									</li>
									<li>
										<select name="province" id="province" class="form-control">
											<option value="">省份/直辖市</option>
											<?php foreach($data as $v): if($v['parent_id'] == 1): ?>
											<option value="<?php echo $v['area_id']; ?>" name="pp"><?php echo $v['area_name']; ?></option>
											<?php endif; endforeach; ?>
										</select>
									</li>
									<li>
										<select name="city" id="city" class="form-control">
											<option value="">市/县</option>
										</select>
									</li>
									<li>
										<select name="town" id="town" class="form-control">
											<option value="">镇/区</option>
										</select>
									</li>
								</ul>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">详细地址：</label>
							<div class="col-sm-10">
								<textarea name="address" class="form-control" rows="3" id="" placeholder="建议您如实填写详细服务地址，例如街道名称，门牌号码，楼层和房间号等信息"></textarea>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">客户姓名：</label>
							<div class="col-sm-10">
								<input type="text" name="username" class="form-control" id="" placeholder="长度不超过25个字符">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">联系方式：</label>
							<div class="col-sm-10">
								<input type="tel" name="phone" class="form-control" id="" placeholder="请输入您的联系方式">
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-offset-2 col-sm-10">
								<button type="submit" class="pull-right btn btn-warning">保存</button>
							</div>
						</div>
					</form>
				</div>
			</div>
			<div class="row member-address-title">
				<h4>已保存的服务地址：<span>(已保存了8条地址，还能保存2条地址)</span></h4>
			</div>
			<div class="row table-wrap">
				<div class="col-sm-12 table-responsive">
					<table class="table table-hover table-bordered table-striped table-condensed">
						<thead>
							<tr>
								<th>客户名</th>
								<th>所在地区</th>
								<th>详细地址</th>
								<th>联系电话</th>
								<th>操作</th>
							</tr>
						</thead>
						<tbody>
							<tr id="">
								<td>232222</td>
								<td>232222</td>
								<td>232222</td>
								<td>232222</td>
								<td><a>修改</a>I<a>删除</a></td>
							</tr>
							<tr id="">
								<td>eeee2</td>
								<td>2fff2</td>
								<td>2ffgggg2</td>
								<td>23yyyy2</td>
								<td><a>修改</a>I<a>删除</a></td>
							</tr>
							<tr id="">
								<td>232222</td>
								<td>23rrr22</td>
								<td>2hrgg2</td>
								<td>232222</td>
								<td><a>修改</a>I<a>删除</a></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</body>
	<script src="__STATIC__/index/js/jquery-3.2.1.min.js"></script>
	<script src="__STATIC__/index/js/bootstrap.min.js"></script>
	<script src="__STATIC__/index/js/ie-emulation-modes-warning.js"></script>
	<script src="__STATIC__/index/js/project.js"></script>
	<script src="__STATIC__/index/js/member_address.js"></script>

</html>