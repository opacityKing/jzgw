<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:78:"C:\wnmp\nginx\html\tp5\public/../application/index\view\index\news_center.html";i:1523587226;}*/ ?>
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
		<link href="__STATIC__/index/css/bootstrap.min.css" rel="stylesheet">
		<link href="__STATIC__/index/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
		<link href="__STATIC__/index/css/header_index.css" rel="stylesheet">
		<link href="__STATIC__/index/css/footer_index.css" rel="stylesheet">
		<!--<link href="__STATIC__/index/css/jzkj.css" rel="stylesheet">-->
		<link href="__STATIC__/index/css/index_product.css" rel="stylesheet">
		<link href="__STATIC__/index/css/reset.css" rel="stylesheet">
		<link href="__STATIC__/index/fonts/font/iconfont.css" rel="stylesheet">
		<script src="__STATIC__/index/js/ie-emulation-modes-warning.js"></script>
		<style>
			.one-right h3 {
				padding-bottom: 10px;
				/*margin-top: -2px;*/
				font-size: 14px;
				color: #757575;
				display: block;
				font-weight: 700;
				line-height: 1.8em;
			}
			
			.one-right p {
				font-size: 14px;
				margin: 0;
				padding: 0;
				color: #333;
				line-height: 1.8em;
				font-weight: 400;
				display: block;
				text-indent: 0;
			}
			
			.news-one {
				overflow: hidden;
				width: 100%;
				padding: 20px 0;
				border-bottom: 1px dotted #dbd4cd;
			}
			
			.one-left .day {
				height: 42px;
				line-height: 42px;
				border-bottom: 1px solid #fff;
				color: #000;
				font-size: 30px;
			}
			
			.one-left .date {
				height: 18px;
				line-height: 18px;
				font-size: 10px;
			}
			
			.one-left .day,
			.one-left .date {
				background-color: #eae6e2;
				display: block;
				text-align: center;
				font-family: Arial;
			}
			.one-more{
				display: inline-block;
				color: cornflowerblue;
				font-weight: bold;
			}
			.one-more:hover{
				text-decoration: none;
			}
		</style>
	</head>

	<body>

		<!---------- 顶部页面 ---------->
		<?php echo widget('Common/headerIndex'); ?>

		<!--header结束-->
		<!--顶部图片-->
		<div class="container-fluid img-wrap">
			<img class="img-brand img-responsive" src="__STATIC__/index/img/product/intr3.jpg" />

		</div>

		<!--顶部图片结束-->
		<!--产品主体部分-->
		<div class="container main">
			<div class="row product">
				<div class="col-sm-3 product-left">
					<p class="product-title"><?php echo $pname; ?></p>
					<!--<p class="title-line"></p>-->

					<ul class="nav nav-tabs" role="tablist">
						<?php foreach($articleData as $v): ?>
						<li role="presentation" class="<?php echo $v['html_id']; ?>">
							<a href="#<?php echo $v['html_id']; ?>" aria-controls="<?php echo $v['html_id']; ?>" role="tab" data-toggle="tab"><span>> </span><?php echo $v['cate_name']; ?></a>
						</li>
						<?php endforeach; ?>
						<!--<li class="streetlight">
							<a href="#streetlight" aria-controls="streetlight" role="tab" data-toggle="tab"><span> </span>太阳能路灯</a>
						</li>
						<li class="dustbin">
							<a href="#dustbin" aria-controls="dustbin" role="tab" data-toggle="tab"><span> </span>垃圾桶</a>
						</li>-->
					</ul>
				</div>
				<div class="col-sm-9 product-right">
					<div class="tab-content">

						<div role="tabpanel" class="words-content tab-pane" id="<?php echo $articleData['0']['html_id']; ?>">
							<p class="product-title"><?php echo $articleData['0']['title']; ?></p>
							<!--<p class="title-line" style="margin-bottom: 0;"></p>-->
							<?php foreach($newsData0 as $n): ?>
							<div class="col-sm-12 news-one">
								<div class="col-sm-2 one-left">
									<span class="day"><?php echo date("d",$n['time']); ?></span>
									<span class="date"><?php echo date("Y/m",$n['time']); ?></span>
								</div>
								<div class="col-sm-10 one-right">
									<h3><a href="<?php echo url('Index/news',['cid'=>$n['cateid'],'id'=>$n['id']]); ?>" class=""><?php echo $n['title']; ?></a></h3>
									<p><?php echo $n['des']; ?> <a href="<?php echo url('Index/news',['cid'=>$n['cateid'],'id'=>$n['id']]); ?>" class="one-more"> >>> </a></p>
								</div>

							</div>
							<?php endforeach; ?>
							<div class="col-sm-12" style="text-align: center;"><?php echo $newsData0->render(); ?></div>

						</div>

						<div role="tabpanel" class="words-content tab-pane" id="<?php echo $articleData['1']['html_id']; ?>">
							<p class="product-title"><?php echo $articleData['1']['title']; ?></p>
							<!--<p class="title-line" style="margin-bottom: 0;"></p>-->
							<?php foreach($newsData1 as $n): ?>
							<div class="col-sm-12 news-one">
								<div class="col-sm-2 one-left">
									<span class="day"><?php echo date("d",$n['time']); ?></span>
									<span class="date"><?php echo date("Y/m",$n['time']); ?></span>
								</div>
								<div class="col-sm-10 one-right">
									<h3><a href="<?php echo url('Index/news',['cid'=>$n['cateid'],'id'=>$n['id']]); ?>" class=""><?php echo $n['title']; ?></a></h3>
									<p><?php echo $n['des']; ?></p>
								</div>

							</div>
							<?php endforeach; ?>
							<div class="col-sm-12" style="text-align: center;"><?php echo $newsData1->render(); ?></div>

						</div>

						<div role="tabpanel" class="words-content tab-pane" id="<?php echo $articleData['2']['html_id']; ?>">
							<p class="product-title"><?php echo $articleData['2']['title']; ?></p>
							<!--<p class="title-line" style="margin-bottom: 0;"></p>-->
							<?php foreach($newsData2 as $n): ?>
							<div class="col-sm-12 news-one">
								<div class="col-sm-2 one-left">
									<span class="day"><?php echo date("d",$n['time']); ?></span>
									<span class="date"><?php echo date("Y/m",$n['time']); ?></span>
								</div>
								<div class="col-sm-10 one-right">
									<h3><a href="<?php echo url('Index/news',['cid'=>$n['cateid'],'id'=>$n['id']]); ?>" class=""><?php echo $n['title']; ?></a></h3>
									<p><?php echo $n['des']; ?></p>
								</div>

							</div>
							<?php endforeach; ?>
							<div class="col-sm-12" style="text-align: center;"><?php echo $newsData2->render(); ?></div>
						</div>

						<input id="forhid" type="hidden" value="<?php echo $hid; ?>" />
					</div>
				</div>
			</div>
			<!--产品主体结束-->
			<!--产品底部-->
			<!--产品底部结束-->
		</div>
	</body>
	<script src="__STATIC__/index/js/jquery-3.2.1.min.js"></script>
	<script src="__STATIC__/index/js/bootstrap.min.js"></script>
	<script src="__STATIC__/index/js/header_index.js"></script>
	<script src="__STATIC__/index/js/jzkj.js"></script>
	<script>
		$(function() {
			var id = $("#forhid").val();
			$("#" + id).addClass("active").siblings().removeClass("active");
			$("." + id).addClass("active").siblings().removeClass("active");
		})
	</script>

</html>