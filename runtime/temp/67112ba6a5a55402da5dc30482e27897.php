<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:71:"C:\wnmp\nginx\html\tp5\public/../application/index\view\index\news.html";i:1515551934;}*/ ?>
<!DOCTYPE html>
<html>

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
		<link href="__STATIC__/index/css/footer_index.css" rel="stylesheet">
		<link href="__STATIC__/index/css/index_news.css" rel="stylesheet">
	</head>

	<body>
		<div class="container news">
			<div class="news-header">
				<a href="/"><img src="__STATIC__/index/img/logo.png" alt="锦众科技"></a>
			</div>
			<div class="news-main">
				<div class="news-title">
					<h1><?php echo $newsData['title']; ?></h1>
				</div>
				<div class="news-info">
					<span>发稿时间：<?php echo date("Y-m-d",$newsData['time']); ?></span>
					<span>来源：<?php echo $newsData['source']; ?></span>
					<span>责任编辑：<?php echo $newsData['editor']; ?></span>
				</div>
				<div class="words-content">
					<?php echo $newsData['content']; ?>
				</div>
			</div>
			<div class="news-footer">
				<!-- JiaThis Button BEGIN -->
				<div class="jiathis_style pull-right">

					<a class="jiathis_button_qzone"></a>
					<a class="jiathis_button_tsina"></a>
					<a class="jiathis_button_tqq"></a>
					<a class="jiathis_button_weixin"></a>
					<a class="jiathis_button_renren"></a>
					<a href="http://www.jiathis.com/share" class="jiathis jiathis_txt jtico jtico_jiathis" target="_blank"></a>
					<!--<a class="jiathis_counter_style"></a>-->

				</div><small class="pull-right">分享到：</small>
				<script type="text/javascript" src="http://v3.jiathis.com/code/jia.js" charset="utf-8"></script>
				<!-- JiaThis Button END -->
				<!--<ul class="pull-right">
					<li>关注我们</li>
				</ul>-->
			</div>
		</div>
		<!--新闻主体结束-->
		<!--新闻底部-->
		<?php echo widget('Common/footerIndex'); ?>
		<!--新闻底部结束-->
	</body>

</html>