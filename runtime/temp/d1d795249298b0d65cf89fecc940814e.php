<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:75:"C:\wnmp\nginx\html\tp5\public/../application/index\view\index\pdetails.html";i:1523953423;}*/ ?>
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

            <ol class="breadcrumb">
                <li><a href="<?php echo url('Index/psecond',['cid'=>$bcid,'pid'=>$bpid]); ?>"><?php echo $breadname1; ?></a></li>
                <li><a href="javascript:history.back(-1)"><?php echo $breadname2; ?></a></li>
                <li class=""><strong><?php echo $data['cate_name']; ?></strong></li>
            </ol>
        </div>
        <div class="col-sm-5 col-xs-12">
            <div class="part1-left">
                <div id="myCarousel_1" class=" carousel slide" data-ride="carousel">
                    <!-- 轮播（Carousel）指标 -->
                    <ol class="carousel-indicators">
                        <?php if(is_array($pdata) || $pdata instanceof \think\Collection || $pdata instanceof \think\Paginator): if( count($pdata)==0 ) : echo "" ;else: foreach($pdata as $k=>$vo): ?>
                        <li data-target="#myCarousel_1" data-slide-to="<?php echo $k; ?>" class=""></li>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </ol>
                    <!-- 轮播（Carousel）项目 -->
                    <div class="carousel-inner" role="listbox">
                        <?php if(is_array($pdata) || $pdata instanceof \think\Collection || $pdata instanceof \think\Paginator): if( count($pdata)==0 ) : echo "" ;else: foreach($pdata as $k=>$vo): ?>
                        <div class="item">
                            <img src="<?php echo $vo; ?>" alt="第<?php echo $k; ?>张图片未添加">
                        </div>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-7 col-xs-12">
            <div>

                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist" style="width: 100%">
                    <li role="presentation"><a href="#introduce" aria-controls="introduce" role="tab" data-toggle="tab">产品介绍</a>
                    </li>
                    <li role="presentation" class="active"><a href="#specification" aria-controls="specification"
                                                              role="tab" data-toggle="tab">规格参数</a></li>
                    <li role="presentation"><a href="#service" aria-controls="service" role="tab"
                                               data-toggle="tab">售后服务</a></li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane fade" id="introduce"><?php echo $data['introduce']; ?></div>
                    <div role="tabpanel" class="tab-pane fade in active" id="specification">
                        <p></p>
                        <table class="table table-condensed table-specification">
                            <tbody>
                            <?php foreach($sdata as $v): ?>
                            <tr>
                                <td><?php echo $v['specification_name']; ?></td>
                                <td><?php echo $v['specification_value']; ?></td>
                            </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                        <div class="s-disclaimer">
                            <p class="footnote">*&nbsp;
                                所列的制造商建议零售价（含增值税）仅供参考，并不包括运输费用、税费（另有明确规定的除外）、所有权、非强制或地区性要求的设备。请向授权经销商咨询具体的价格信息。</p>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="service">...</div>
                </div>

            </div>
        </div>

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