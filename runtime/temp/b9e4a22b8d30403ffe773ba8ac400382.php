<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:72:"C:\wnmp\nginx\html\tp5\public/../application/index\view\index\index.html";i:1524042528;}*/ ?>
<html lang="zh-CN">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="renderer" content="webkit">
    <!--页面清除缓存-->
    <meta http-equiv="pragma" content="no-cache">
    <meta http-equiv="cache-control" content="no-cache">
    <meta http-equiv="expires" content="0">

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
    <style>
        .part1-title {
            font-size: 1.5rem;
            font-weight: 100;
            font-family: inherit;
            text-align: center;
            border-bottom: none;
        }

        .part1-left a:hover {
            color: #d5001c;
        }

        .part1-left .wrap {
            background: none;
        }

        .part1-left-title {
            font-size: 22px;
        }

        .part1-left-title span {
            font-size: 32px;
            color: #d5001c;

        }

        .main-part1 .part1-left img {
            height: 13rem;
            height: 130px\9;
        }
    </style>
</head>

<body>

<!---------- 顶部页面 ---------->
<?php echo widget('Common/headerIndex'); ?>
<!--header结束-->
<!--幻灯片-->
<div class="container-fluid">
    <div class="show-wrap">
        <div class="show">
            <img class="show1"
                 style="background: url(__STATIC__/index/img/homeCarousel/intr1.jpg) no-repeat center;background-size:cover;filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src=__STATIC__/index/img/homeCarousel/intr1.jpg,  sizingMethod='scale'); "/>
            <img class="show1"
                 style="background: url(__STATIC__/index/img/homeCarousel/intr5.jpg) no-repeat center;background-size:cover;filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src=__STATIC__/index/img/homeCarousel/intr5.jpg, sizingMethod='scale'); "/>
            <img class="show1"
                 style="background: url(__STATIC__/index/img/homeCarousel/intr4.jpg) no-repeat center;background-size:cover;filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src=__STATIC__/index/img/homeCarousel/intr4.jpg, sizingMethod='scale'); "/>
            <img class="show1"
                 style="background: url(__STATIC__/index/img/homeCarousel/intr2.jpeg) no-repeat center;background-size:cover;filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src=__STATIC__/index/img/homeCarousel/intr2.jpeg, sizingMethod='scale'); "/>
            <img class="show1"
                 style="background: url(__STATIC__/index/img/homeCarousel/intr3.jpeg) no-repeat center;background-size:cover;filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src=__STATIC__/index/img/homeCarousel/intr3.jpeg, sizingMethod='scale'); "/>
            <!--<img class="show1" src="__STATIC__/index/img/homeCarousel/intr5.jpg"/>-->
            <!--<img class="show1" src="__STATIC__/index/img/homeCarousel/intr4.jpg"/>-->
            <!--<img class="show1" src="__STATIC__/index/img/homeCarousel/intr2.jpeg"/>-->
            <!--<img class="show1" src="__STATIC__/index/img/homeCarousel/intr3.jpeg"/>-->
        </div>
        <ul class="points list-unstyled list-inline">
            <li><i class="points-hover"></i> </li>
            <li><i></i></li>
            <li><i></i></li>
            <li><i></i></li>
            <li><i></i></li>
        </ul>
        <img class="six" src="__STATIC__/index/img/icons/six.png"/>

    </div>
</div>

<!--幻灯片结束-->
<!--主页主体部分-->
<div class="container main">
    <div class="row main-part1" id="cp">
        <div class="col-sm-12 col-xs-12 part1-title">
            <h2>产品中心</h2>
        </div>
        <?php foreach($data as $v): ?>
        <div class="col-sm-3 col-xs-6" style="margin-bottom: 15px">
            <div class="part1-left">
                <a href="<?php echo url('Index/psecond',['cid'=>$v['cate_id'],'pid'=>$v['parent_id']]); ?>">
                    <img src="<?php echo $v['cate_pic']; ?>"/>
                    <div class="wrap">
                        <p class="part1-left-title"><span> &#155; </span> <?php echo $v['cate_name']; ?></p>
                        <p class="part1-left-content"></p>
                    </div>
                </a>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
    <div class="row main-part2">
        <div class="col-sm-12 col-xs-12 part1-title">
            <h2>幕后</h2>
        </div>
        <div class="col-sm-3 col-xs-6" style="margin-bottom: 15px">
            <div class="part1-left">
                <img src="__STATIC__/index/img/manuscript/manuscript01.png"/>
            </div>
        </div>
        <div class="col-sm-3 col-xs-6" style="margin-bottom: 15px">
            <div class="part1-left">
                <img src="__STATIC__/index/img/manuscript/manuscript02.png"/>
            </div>
        </div>
        <div class="col-sm-3 col-xs-6" style="margin-bottom: 15px">
            <div class="part1-left">
                <img src="__STATIC__/index/img/manuscript/manuscript03.png"/>
            </div>
        </div>
        <div class="col-sm-3 col-xs-6" style="margin-bottom: 15px">
            <div class="part1-left">
                <img src="__STATIC__/index/img/manuscript/manuscript04.png"/>
            </div>
        </div>
    </div>

</div>
<!--主页主体结束-->
<!--主页底部-->
<?php echo widget('Common/footerIndex'); ?>
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