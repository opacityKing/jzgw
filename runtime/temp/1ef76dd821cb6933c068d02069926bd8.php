<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:73:"C:\wnmp\nginx\html\tp5\public/../application/admin\view\device\index.html";i:1513233556;}*/ ?>
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
		<link href="__STATIC__/admin/css/font-awesome.css" rel="stylesheet">
		<link href="__STATIC__/admin/css/weather-icons.css" rel="stylesheet">

		<!--Beyond styles-->
		<link id="beyond-link" href="__STATIC__/admin/css/beyond.css" rel="stylesheet" type="text/css">
		<link href="__STATIC__/admin/css/demo.css" rel="stylesheet">
		<link href="__STATIC__/admin/css/typicons.css" rel="stylesheet">
		<link href="__STATIC__/admin/css/animate.css" rel="stylesheet">

	</head>

	<body>
		<!-- 头部 -->
		<?php echo widget('Common/header'); ?>
		<!-- /头部 -->

		<div class="main-container container-fluid">
			<div class="page-container">
				<!-- Page Sidebar -->
				<?php echo widget('Common/left'); ?>
				<!-- /Page Sidebar -->
				<!-- Page Content -->
				<div class="page-content">
					<!-- Page Breadcrumb -->
					<div class="page-breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<a href="#">系统</a>
							</li>
							<li class="active">设备管理</li>
						</ul>
					</div>
					<!-- /Page Breadcrumb -->

					<!-- Page Body -->
					<div class="page-body">

						<button type="button" tooltip="添加设备" class="btn btn-sm btn-azure btn-addon" onClick="javascript:window.location.href = '<?php echo url('Device/add'); ?>'"><i class="fa fa-plus"></i> Add
        </button>
						<div class="row">
							<div class="col-lg-12 col-sm-12 col-xs-12">
								<div class="widget">
									<div class="widget-body">
										<div class="flip-scroll">
											<table class="table table-bordered table-hover">
												<thead class="">
													<tr>
														<th class="text-center">ID</th>
														<th class="text-center">设备名称</th>
														<th class="text-center">操作</th>
													</tr>
												</thead>
												<tbody>
													<?php foreach($Data as $v): ?>
													<tr>
														<td align="center"><?php echo $v['id']; ?></td>
														<td align="center"><?php echo $v['deviceName']; ?></td>
														<td align="center">
															<a href="<?php echo url('Device/upd',array('id'=>$v['id'])); ?>" class="btn btn-primary btn-sm shiny">
																<i class="fa fa-edit"></i> 编辑
															</a>

															<a href="#" onClick="warning('确实要删除吗', '<?php echo url(" Device/del ",array('id'=>$v['id'])); ?>')" class="btn btn-danger btn-sm shiny">
																<i class="fa fa-trash-o"></i> 删除
															</a>

														</td>
													</tr>
													<?php endforeach; ?>

												</tbody>
											</table>

										</div>
										<div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-12 col-sm-12 col-xs-12 paginate-wrap">
								<?php echo $Data->render(); ?>
							</div>
						</div>
					</div>
					<!-- /Page Body -->
				</div>
				<!-- /Page Content -->
			</div>
		</div>

		<!--Basic Scripts-->
		<script src="__STATIC__/admin/js/jquery_002.js"></script>
		<script src="__STATIC__/index/js/bootstrap.min.js"></script>
		<script src="__STATIC__/admin/js/jquery.js"></script>
		<!--Beyond Scripts-->
		<script src="__STATIC__/admin/js/beyond.js"></script>

	</body>

</html>