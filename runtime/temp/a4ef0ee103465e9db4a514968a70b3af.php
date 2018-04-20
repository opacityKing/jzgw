<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:69:"C:\wnmp\nginx\html\tp5\public/../application/admin\view\cate\upd.html";i:1515398030;}*/ ?>
<!DOCTYPE html>
<html><head>
    <meta charset="utf-8">
    <title></title>

    <meta name="description" content="Dashboard">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!--Basic Styles-->
    <link href="__STATIC__/admin/css/bootstrap.css" rel="stylesheet">
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
            <li>
                <a href="<?php echo url('Cate/lists'); ?>">栏目管理</a>
            </li>
            <li class="active">修改栏目</li>
        </ul>
    </div>
    <!-- /Page Breadcrumb -->

    <!-- Page Body -->
    <div class="page-body">

        <div class="row">
            <div class="col-lg-12 col-sm-12 col-xs-12">
                <div class="widget">
                    <div class="widget-header bordered-bottom bordered-blue">
                        <span class="widget-caption">修改栏目</span>
                    </div>
                    <div class="widget-body">
                        <div id="horizontal-form">
                            <form class="form-horizontal" role="form" action="<?php echo url('Cate/doUpd'); ?>" method="post">
                                <div class="form-group">
                                    <label for="catename" class="col-sm-2 control-label no-padding-right">栏目名</label>
                                    <div class="col-sm-6">
                                        <input class="form-control" id="catename" placeholder="" name="catename" required="" type="text" value="<?php echo $cateData['cate_name']; ?>">
                                    </div>
                                    <p class="help-block col-sm-4 red">* 必填</p>
                                </div>

                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <button type="submit" class="btn btn-default">保存信息</button>
                                    </div>
                                </div>
                                <input type="hidden" name="id" value="<?php echo $cateData['cate_id']; ?>">
                            </form>
                        </div>
                    </div>
                </div>
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
<script src="__STATIC__/admin/js/bootstrap.js"></script>
<script src="__STATIC__/admin/js/jquery.js"></script>
<!--Beyond Scripts-->
<script src="__STATIC__/admin/js/beyond.js"></script>



</body></html>