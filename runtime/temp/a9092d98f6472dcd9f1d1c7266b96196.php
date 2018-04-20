<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:72:"C:\wnmp\nginx\html\tp5\public/../application/index\view\lists\lists.html";i:1514249956;}*/ ?>
﻿<html lang="zh-CN">

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
		<link href="__STATIC__/index/css/dustbin_list_white.css" rel="stylesheet">
		<link href="__STATIC__/index/css/clicon.css" rel="stylesheet">
		<script src="__STATIC__/index/js/ie-emulation-modes-warning.js"></script>

	</head>

	<body>
		<!--背景图片-->
		<!--<div class="bg-index">-->
		<!--<img class="bg-index" src="images/20150120_ifold1.jpg" />-->
		<!--</div>-->
		<!--顶部导航栏-->
		<?php echo widget('Common/headerFluit'); ?>
		<!--顶部导航栏结束-->
		<!--副导航栏-->
		<div style="margin-top: 20px;">
			<div class="container">

				<div class="row">
					<!--左侧面包屑导航-->
					<div class="col-md-8 col-xs-12">

						<ol class="breadcrumb" style="background: rgba(0,0,0,0);">
							<li>
								<a href="overview">控制中心</a>
							</li>
							<li>
								<a href="overview">智能环保箱项目</a>
							</li>
							<li class="active" id="bread3" value=<?php echo $dt; ?>></li>
						</ol>

					</div>
					<!-- 右侧搜索框 -->
					<div class="col-md-4 col-xs-10 " style="position: relative;margin-bottom: 10px;padding-left: 30px;">
						<div class="input-group" style="width: 70%;">
							<input class="form-control search-input" name="keyword" type="text" value="" autocomplete="off" accesskey="s" placeholder="产品名称或设备地址" style="border-radius: 20px;">
							<span class="input-group-btn" style="position: absolute;right: 0;top: 0;">
        <button class="btn btn-default" type="button"style="border: none;background-color: rgba(0,0,0,0);display: inline-block;position: absolute;right: 0;top: 3px;z-index:3">
        	<span class="glyphicon glyphicon-search" style="border: none;color: #999;" ria-hidden="true"></span>
							</button>
							</span>
						</div>
						<!-- /input-group -->
					</div>
					<!-- /.col-lg-6 -->
				</div>
				<!-- /.row -->

			</div>
		</div>

		<!--产品展示区-->

		<!--致后端的兄弟  在container里每一行是row,每一个row里有3个相同的col-md-4 -->

		<div class="container product-container border-img">
			<div class="row">

				<!-- 按钮触发模态框 -->
				<!--三个模态框后面开始6个卡片-->
				<!-- 模态框（Modal_first） -->
				<div class="modal fade" id="myModal_first" tabindex="-1" role="dialog" aria-labelledby="myModalLabel_first" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<!--模态框头部标题-->
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
								<h4 class="modal-title" id="myModalLabel_first">历史数据</h4>
							</div>
							<!--模态框主体-->
							<div class="modal-body">
								<!--模态框主体选项组-->
								<ul class="modal-ulout">
									<li class="modal-ulout-lilastno"><span>请选择日期</span>
										<input id="sel_date" type="date" />
									</li>
									<li class="modal-ulout-lilastno">
										<span>请选择时间</span>
										<select id="sel_day" name="save_time_H">
											<option value="">一天</option>
											<option value="00">0</option>
											<option value="01">1</option>
											<option value="02">2</option>
											<option value="03">3</option>
											<option value="04">4</option>
											<option value="05">5</option>
											<option value="06">6</option>
											<option value="07">7</option>
											<option value="08">8</option>
											<option value="09">9</option>
											<option value="10">10</option>
											<option value="11">11</option>
											<option value="12">12</option>
											<option value="13">13</option>
											<option value="14">14</option>
											<option value="15">15</option>
											<option value="16">16</option>
											<option value="17">17</option>
											<option value="18">18</option>
											<option value="19">19</option>
											<option value="20">20</option>
											<option value="21">21</option>
											<option value="22">22</option>
											<option value="23">23</option>
										</select>
									</li>
									<li>
										<button id="sel_ok" class="btn btn-info btn-xs">查询</button>
									</li>
								</ul>
								<div class="table-fixhead-wrap">
									<!--模态框主体表格之头部-->
									<table class="table table-header">
										<thead>
											<tr>
												<th class="" title="电池电压/V"><span class="Cicon Cicon-modal-dc"></span></th>
												<th class="" title="太阳能板电压/V"><span class="Cicon Cicon-modal-tyn"></span></th>
												<th class="" title="日期"><span class="Cicon Cicon-modal-rq"></span></th>
												<th class="" title="温度℃"><span class="Cicon Cicon-modal-wd"></span></th>
												<th class="" title="小时"><span class="Cicon Cicon-modal-sj"></span></th>
												<!--<th class="" title="电池电压/V"><img src="__STATIC__/index/img/icons/imodal/dc.png" /></th>-->
												<!--<th class="" title="太阳能板电压/V"><img src="__STATIC__/index/img/icons/imodal/tyn.png" /></th>-->
												<!--<th class="" title="日期"><img src="__STATIC__/index/img/icons/imodal/rq.png" /></th>-->
												<!--<th class="" title="温度℃"><img src="__STATIC__/index/img/icons/imodal/wd.png" /></th>-->
												<!--<th class="" title="小时"><img src="__STATIC__/index/img/icons/imodal/sj.png" /></th>-->
											</tr>
										</thead>
									</table>
									<!--模态框主体表格之主体-->
									<div class="table-box">

										<table class="table table-body">
											<tbody id="mdata1">

											</tbody>
										</table>

									</div>
								</div>
							</div>

						</div>
						<!-- /.modal-content -->
					</div>
					<!-- /.modal -->
				</div>
				<!-- 模态框（Modal_second） -->
				<div class="modal fade" id="myModal_second" tabindex="-1" role="dialog" aria-labelledby="myModalLabel_second" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
								<h4 class="modal-title" id="myModalLabel_second">实时数据</h4>
							</div>
							<div class="modal-body" style="padding: 3rem;padding-top: 1rem;">
								<table class="table ">
									<thead>
										<tr>
											<th>名称</th>
											<th>详情</th>
										</tr>
									</thead>
									<tbody id="mdata2">

									</tbody>
								</table>

							</div>

						</div>
						<!-- /.modal-content -->
					</div>
					<!-- /.modal -->
				</div>
				<!-- 模态框（Modal_third） -->
				<div class="modal fade" id="myModal_third" tabindex="-1" role="dialog" aria-labelledby="myModalLabel_third" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
								<h4 class="modal-title" id="myModalLabel_third">设备信息</h4>
							</div>
							<div class="modal-body" style="padding: 3rem;padding-top: 1rem;">
								<table class="table ">
									<thead>
										<tr>
											<th>名称</th>
											<th>详情</th>
										</tr>
									</thead>
									<tbody id="mdata3">

									</tbody>
								</table>

							</div>

						</div>
						<!-- /.modal-content -->
					</div>
					<!-- /.modal -->
				</div>

				<!--第一个卡片-->

				<?php if(is_array($listsdata) || $listsdata instanceof \think\Collection || $listsdata instanceof \think\Paginator): $i = 0; $__LIST__ = $listsdata;if( count($__LIST__)==0 ) : echo "暂无此分类设备" ;else: foreach($__LIST__ as $key=>$lists): $mod = ($i % 2 );++$i;?>

				<div class="col-md-6 col-sm-6 col-xs-12 col-lg-4">
					<div class="product-card panel card panel-body panel-default">
						<div class="row product-card-heading" title="垃圾桶编号">
							<div class="col-md-3 col-md-offset-1 col-xs-3 col-xs-offset-1">
								<p class="product-number">
									<a target="_blank"><?php echo $lists['deviceName']; ?></a>
								</p>

							</div>
							<div class="col-md-8 col-xs-8 product-title-right">
								<ul>
									<li title="垃圾桶是否桶满"><span class="Cicon Cicon-overview-ljt"></span></li>
									<li title="垃圾桶是否发出烟雾报警"><span class="Cicon Cicon-overview-yw"></span></li>
									<li title="垃圾桶是否发出温度报警"><span class="Cicon Cicon-overview-wd"></span></li>
									<li title="垃圾桶是否发出开关报警"><span class="Cicon Cicon-overview-kg"></span></li>
									<!--<li title="垃圾桶是否桶满"><span class="ico-up"><img src="__STATIC__/index/img/icons/imapoverview/ljt.png" /></span></li>-->
									<!--<li title="垃圾桶是否开启烟雾报警"><span class="ico-up"><img src="__STATIC__/index/img/icons/imapoverview/yw.png" /></span></li>-->
									<!--<li title="垃圾桶是否开启温度报警"><span class="ico-up"><img src="__STATIC__/index/img/icons/imapoverview/wd.png" /></span></li>-->
									<!--<li title="垃圾桶是否开启开关报警"><span class="ico-up"><img src="__STATIC__/index/img/icons/imapoverview/kg.png" /></span></li>-->
								</ul>
								<ul>
									<li><span class="ico-dowm" value=<?php echo $lists['trashFull']; ?>></span></li>
									<li><span class="ico-dowm" value=<?php echo $lists['smokeAlarm']; ?>></span></li>
									<li><span class="ico-dowm" value=<?php echo $lists['tempAlarm']; ?>></span></li>
									<li><span class="ico-dowm" value=<?php echo $lists['switchSignal']; ?>></span></li>
								</ul>
							</div>
						</div>
						<div class="product-card-body">
							<p>
								<span class="card-attr">设备类型：</span>
								<span class="card-val"><?php echo $lists['deviceType']; ?></span>
							</p>
							<p>
								<span class="card-attr">设备地址：</span>
								<span class="card-val"><?php echo $lists['address']; ?></span>
							</p>
							<p class="last">
								<span class="card-attr">上次桶满：</span>
								<span class="card-val"><?php echo $lists['addDate']; ?></span>
							</p>
							<div>

								<button type="button " class="btn btn-primary btn-product btn-product1" data-toggle="modal" data-target="#myModal_first">历史数据</button>

								<button type="button" class="btn btn-primary btn-product btn-product2" data-toggle="modal" data-target="#myModal_second">实时数据</button>

								<button type="button" class="btn btn-primary btn-product btn-product3" data-toggle="modal" data-target="#myModal_third">设备信息</button>

							</div>
						</div>
					</div>
				</div>

				<?php endforeach; endif; else: echo "暂无此分类设备" ;endif; ?>

			</div>
			<!-- row结束 -->
		</div>
		<!-- .container结束 -->
		<!--分页-->
		<div class="container-fluid">
			<div class="row" style="text-align: center;">

				<!--<div class="col-md-4 col-md-offset-4">-->
				<!--<div id="pageToolbar"></div>-->
				<?php echo $listsdata->appends(['dtype' => $dt])->render(); ?>

				<!--</div>-->
			</div>

		</div>
	</body>
	<script src="__STATIC__/index/js/jquery-3.2.1.min.js"></script>
	<script>
		window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')
	</script>
	<script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="__STATIC__/index/js/dustbin_list.js"></script>
	<script src="__STATIC__/index/js/header.js"></script>
	<script src="__STATIC__/index/js/single_historical.js"></script>

</html>