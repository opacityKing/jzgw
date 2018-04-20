<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:72:"C:\wnmp\nginx\html\tp5\public/../application/admin\view\admin\lists.html";i:1516946986;}*/ ?>
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
		<?php echo widget('Common/header'); ?>
		<div class="container project-wrap">
			<div class="row project-title">
				<h4>用户列表如下：
				<a class="btn btn-primary pull-right" target="_blank" href="<?php echo url('admin/add'); ?>">添加用户</a></h4>
			</div>
			<div class="row">
				<div class="col-md-3 col-split">
					<div class="panel panel-info">
						<!-- Default panel contents -->
						<div class="panel-heading panel-show">
							<span class="project-name" title="白河项目白河项目白河项目白河项目">白河项目白河项目白河项目白河项目</span>
							<a class="pull-right" href="<?php echo url('admin/project'); ?>">进入项目</a>
						</div>
						<div class="panel-body panel-show">
							<p class="project-intro">白河项目的备注信息，可包括创建时间、项目说明、进展情况等。白河项目的备注信息，可包括创建时间、项目说明、进展情况等</p>
						</div>

						<!-- List group -->
						<ul class="list-group">
							<li class="list-group-item" style="height: 3rem; text-align: center;">
								<a class="col-md-6" target="_blank" href="<?php echo url('admin/upd'); ?>" style="border-right: solid 1px #ddd;">编辑用户</a>
								<a class="col-md-6" class="del" id="0001" href="">删除用户</a>
							</li>
							<!--<li class="list-group-item">-->
							<!--</li>-->

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
	<script>
		$(".del").click(function() {
			var r = confirm("确定要删除该分组吗？!");
			if(r == true) {
				var groupid = $(this).attr("id");
				$.post("<?php echo url('admin/del'); ?>", {
						groupid: groupid
					},
					function() {
						alert("删除成功");
						$(location).prop('href', 'index');
					});
//				document.write("You pressed OK!")
			} else {
//				document.write("You pressed Cancel!")
			}
		})
	</script>

</html>