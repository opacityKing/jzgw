<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:74:"C:\wnmp\nginx\html\tp5\public/../application/admin\view\article\index.html";i:1523585864;}*/ ?>
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
<?php echo widget('Common/headerIndex'); ?>

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
                    <li class="active">其他文章管理</li>
                </ul>
            </div>
            <!-- /Page Breadcrumb -->

            <!-- Page Body -->
            <div class="page-body">

                <button type="button" tooltip="添加导航文章" class="btn btn-sm btn-azure btn-addon"
                        onClick="javascript:window.location.href = '<?php echo url('Article/add'); ?>'"><i class="fa fa-plus"></i>
                    Add
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
                                            <th class="text-center">文章名称</th>
                                            <th class="text-center">缩略图</th>
                                            <th class="text-center">所属栏目</th>
                                            <th class="text-center">发布时间</th>
                                            <!--<th class="text-center">文章描述</th>-->
                                            <!--<th class="text-center">文章详情</th>-->
                                            <th class="text-center">操作</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach($articleData as $v): ?>
                                        <tr>
                                            <td align="center"><?php echo $v['id']; ?></td>
                                            <td align="center"><?php echo $v['title']; ?></td>
                                            <td align="center">
                                                <?php if($v['pic'] != ''): ?>
                                                <img src="<?php echo $v['pic']; ?>" width="80"></td>
                                                <?php else: ?>
                                            暂无缩略图
                                                <?php endif; ?>

                                            <td align="center"><?php echo $v['cate_name']; ?></td>
                                            <td align="center"><?php echo date("Y-m-d H:i:s",$v['time']); ?></td>
                                         
                                            <td align="center">
                                                <a href="<?php echo url("Article/upd",array('id'=>$v['id'])); ?>" class="btn
                                                btn-primary btn-sm shiny">
                                                <i class="fa fa-edit"></i> 编辑
                                                </a>

                                                <a href="#" onClick="warning('确实要删除吗', '<?php echo url("Article/del",array('id'=>$v['id'])); ?>')"
                                                class="btn btn-danger btn-sm shiny">
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
                <?php echo $articleData->render(); ?>
            </div>
            <!-- /Page Body -->
        </div>
        <!-- /Page Content -->
    </div>
</div>

<!--Basic Scripts-->
<script src="__STATIC__/admin/js/jquery_002.js"></script>
<script src="__STATIC__/admin/js/bootstrap.js"></script>
<script src="__STATIC__/admin/js/jquery.js"></script>
<!--Beyond Scripts-->
<script src="__STATIC__/admin/js/beyond.js"></script>


</body></html>