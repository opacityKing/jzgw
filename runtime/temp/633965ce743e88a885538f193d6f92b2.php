<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:74:"C:\wnmp\nginx\html\tp5\public/../application/index\view\index\psecond.html";i:1523953423;}*/ ?>
<html lang="zh-CN">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="__STATIC__/index/img/logo.png" type="image/vnd.microsoft.icon">
    <link rel="icon" href="__STATIC__/index/img/logo.png" type="image/vnd.microsoft.icon">

    <title>锦众科技</title>
    <link href="__STATIC__/index/css/reset.css" rel="stylesheet">
    <link href="__STATIC__/index/fonts/font/iconfont.css" rel="stylesheet">
    <link href="__STATIC__/index/css/bootstrap.min.css" rel="stylesheet">
    <link href="__STATIC__/index/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <link href="__STATIC__/index/css/header_index.css" rel="stylesheet">
    <link href="__STATIC__/index/css/footer_index.css" rel="stylesheet">
    <link href="__STATIC__/index/css/jzkj.css" rel="stylesheet">
    <script src="__STATIC__/index/js/ie-emulation-modes-warning.js"></script>
    <!--[if lt IE 9]>
    　 <script src="https://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.js"></script>
    <![endif]-->
</head>

<body>

<!---------- 顶部页面 ---------->
<?php echo widget('Common/headerIndex'); ?>
<!--header结束-->

<!--主页主体部分-->
<div class="container main main-product">
    <div class="row main-part1">
        <div class="col-sm-12 part1-title">
            <strong><?php echo $breadname1; ?></strong>
        </div>
        <?php foreach($data as $v): ?>
        <div class="col-sm-4 col-xs-6 col-split" style="margin-bottom: 15px">
            <div class="part1-left">
                <a href="<?php echo url('Index/pthird',['cid'=>$v['cate_id'],'pid'=>$v['parent_id']]); ?>">
                    <img src="<?php echo $v['cate_pic']; ?>"/>
                    <div class="wrap">
                        <p class="part1-left-title"><?php echo $v['cate_name']; ?></p>
                        <p class="part1-left-content"><?php echo $v['cate_des']; ?></p>
                    </div>
                </a>
            </div>
        </div>
        <?php endforeach; ?>


    </div>


</div>
<!--主页主体结束-->
<!--主页底部-->
<!--主页底部结束-->
</body>
<script src="__STATIC__/index/js/jquery-3.2.1.min.js"></script>
<!--[if IE 8]>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<![endif]-->
<script src="__STATIC__/index/js/bootstrap.min.js"></script>
<script src="__STATIC__/index/js/header_index.js"></script>
<script src="__STATIC__/index/js/jzkj.js"></script>

</html>