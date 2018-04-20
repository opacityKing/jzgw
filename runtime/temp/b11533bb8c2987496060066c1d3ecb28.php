<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:74:"C:\wnmp\nginx\html\tp5\public/../application/index\view\index\contact.html";i:1523956194;}*/ ?>
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
    <link href="__STATIC__/index/css/index_product.css" rel="stylesheet">
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
<!--顶部图片-->
<div class="container-fluid img-wrap">
    <img class="img-brand img-responsive" src="__STATIC__/index/img/product/intr4.jpg"/>
</div>

<!--顶部图片结束-->
<!--产品主体部分-->
<div class="container main">
    <div class="row product">
        <div class="col-sm-3 col-xs-3 product-left">
            <p class="product-title"><?php echo $pname; ?></p>
            <!--<p class="title-line"></p>-->

            <ul class="nav nav-tabs" role="tablist">
                <?php foreach($articleData as $v): ?>
                <li role="presentation" class="<?php echo $v['html_id']; ?>">
                    <a href="#<?php echo $v['html_id']; ?>" aria-controls="<?php echo $v['html_id']; ?>" role="tab" data-toggle="tab"><span>> </span><?php echo $v['cate_name']; ?></a>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>
        <div class="col-sm-9 col-xs-9 product-right">
            <div class="tab-content">

                <?php foreach($articleData as $v): ?>
                <div role="tabpanel" class="words-content tab-pane" id="<?php echo $v['html_id']; ?>">
                    <p class="product-title"><?php echo $v['title']; ?></p>
                    <!--<p class="title-line"></p>-->
                    <div class="col-sm-6 col-xs-12">
                        <?php echo $v['content']; ?>
                    </div>
                    <div class="col-sm-6 col-xs-12">
                        <iframe src="<?php echo url('Index/jzmap'); ?>" class="jzmap">

                        </iframe>
                    </div>
                </div>
                <?php endforeach; ?>

                <input id="forhid" type="hidden" value="<?php echo $hid; ?>"/>
            </div>
        </div>
    </div>
</div>
<!--产品主体结束-->
<!--产品底部-->
<!--产品底部结束-->

</body>
<script src="__STATIC__/index/js/jquery-3.2.1.min.js"></script>
<!--[if IE 8]>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<![endif]-->
<script src="__STATIC__/index/js/bootstrap.min.js"></script>
<script src="__STATIC__/index/js/header_index.js"></script>
<script src="__STATIC__/index/js/jzkj.js"></script>

<script>
    $(function () {
        var id = $("#forhid").val();
        $("#" + id).addClass("active").siblings().removeClass("active");
        $("." + id).addClass("active").siblings().removeClass("active");
        $('.nav-tabs a').click(function (e) {
            e.preventDefault()
            $(this).tab('show')
        })
    })
</script>
</html>