<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:73:"C:\wnmp\nginx\html\tp5\public/../application/admin\view\orders\index.html";i:1516938261;}*/ ?>
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
		<link href="__STATIC__/index/css/header_fluit.css" rel="stylesheet">
		<style type="text/css">
			.main-container {
				width: 100%;
				margin-top: 70px;
			}
			
			.filters-wrap {
				text-align: center;
				margin-bottom: 12px;
			}
			
			.filters-wrap input {
				padding: 6px 12px;
				font-size: 14px;
				font-weight: 400;
				margin-right: 20px;
			}
			
			table {
				/*background: black;*/
				/*color: white;*/
				color: #D1EDFF;
				background: #0F192A;
			}
			
			tr:hover {
				background: #0F0F0F;
			}
			
			.table-header-box {
				position: relative;
				width: 100%;
				overflow: auto;
				padding-right: 18px;
			}
			
			.table-box {
				position: relative;
				width: 100%;
				height: 600px;
				overflow-y: scroll;
			}
			
			.table-header {
				margin-bottom: 0px;
				/*width: 98.8%;*/
				width: 100%;
			}
			
			.table-body {
				width: 100%;
			}
			
			.table-header th span,
			.table-body td span {
				display: inline-block;
				text-align: center;
				text-overflow: ellipsis;
				overflow: hidden;
				white-space: nowrap;
				/*background: red;*/
			}
			
			.col1 span {
				width: 3rem;
			}
			
			.col2 span {
				width: 13rem;
			}
			
			.col3 span {
				width: 13rem;
			}
			
			.col4 span {
				width: 30rem;
			}
			
			.col5 span {
				width: 6rem;
			}
			
			.col6 span {
				width: 4rem;
			}
			
			.col7 span {
				width: 13rem;
			}
			
			.col8 span {
				width: 4rem;
			}
		</style>
	</head>

	<body>
		<!-- 头部 -->
		<?php echo widget('Common/header'); ?>
		<!-- /头部 -->

		<!--主体（包括查询和表格）-->
		<div class="main-container container">
			<div class="filters-wrap">
				<input id="sel_date" type="date" />

				<button id="sel_ok" class="btn btn-info">查找</button>

			</div>
			<div class="table-fixhead-wrap row ">
				<div class="table-header-box">
					<table class="table table-header">
						<thead>
							<tr>
								<th class="col1"> <span>序号</span> </th>
								<th class="col2"><span>工单号</span></th>
								<th class="col3"><span>提交人</span></th>
								<th class="col4"><span>工单标题</span></th>
								<th class="col5"><span>状态</span></th>
								<th class="col6"><span>优先级</span></th>
								<th class="col7"><span>添加日期</span></th>
								<th class="col8"><span>操作</span></th>
							</tr>
						</thead>
					</table>
				</div>

				<div class="table-box">

					<table class="table table-body">
						<tbody id="">
							<tr>
								<td class="col1"><span>1</span></td>
								<td class="col2"><span>24564346864</span></td>
								<td class="col3"><span>校长</span></td>
								<td class="col4"><span>查看查看查看查看查看查看查看查看查看查看查看查看查看查看查看</span></td>
								<td class="col5"><span class="text-danger">未处理</span></td>
								<td class="col6"><span>一般</span></td>
								<td class="col7"><span>2018/01/22</span></td>
								<td class="col8"><span> <a href="<?php echo url('Orders/orders'); ?>" target="_blank"><button id="" class="btn btn-info btn-xs">详情</button></a> </span></td>
							</tr>
							<tr>
								<td class="col1"><span>1</span></td>
								<td class="col2"><span>24564346864</span></td>
								<td class="col3"><span>校长</span></td>
								<td class="col4"><span>查看查看查看查看查看查看查看查看查看查看查看查看查看查看查看</span></td>
								<td class="col5"><span>未处理</span></td>
								<td class="col6"><span>一般</span></td>
								<td class="col7"><span>2018/01/22</span></td>
								<td class="col8"><span> <a href="<?php echo url('Orders/orders'); ?>" target="_blank"><button id="" class="btn btn-info btn-xs">详情</button></a> </span></td>
							</tr>
							<tr>
								<td class="col1"><span>1</span></td>
								<td class="col2"><span>24564346864</span></td>
								<td class="col3"><span>校长</span></td>
								<td class="col4"><span>查看查看查看查看查看查看查看查看查看查看查看查看查看查看查看</span></td>
								<td class="col5"><span class="text-danger">未处理</span></td>
								<td class="col6"><span>一般</span></td>
								<td class="col7"><span>2018/01/22</span></td>
								<td class="col8"><span> <a href="<?php echo url('Orders/orders'); ?>" target="_blank"><button id="" class="btn btn-info btn-xs">详情</button></a> </span></td>
							</tr>
							<tr>
								<td class="col1"><span>1</span></td>
								<td class="col2"><span>24564346864</span></td>
								<td class="col3"><span>校长</span></td>
								<td class="col4"><span>查看查看查看查看查看查看查看查看查看查看查看查看查看查看查看</span></td>
								<td class="col5"><span>未处理</span></td>
								<td class="col6"><span>一般</span></td>
								<td class="col7"><span>2018/01/22</span></td>
								<td class="col8"><span> <a href="<?php echo url('Orders/orders'); ?>" target="_blank"><button id="" class="btn btn-info btn-xs">详情</button></a> </span></td>
							</tr>
							<tr>
								<td class="col1"><span>1</span></td>
								<td class="col2"><span>24564346864</span></td>
								<td class="col3"><span>校长</span></td>
								<td class="col4"><span>查看查看查看查看查看查看查看查看查看查看查看查看查看查看查看</span></td>
								<td class="col5"><span class="text-success">未处理</span></td>
								<td class="col6"><span>一般</span></td>
								<td class="col7"><span>2018/01/22</span></td>
								<td class="col8"><span> <a href="<?php echo url('Orders/orders'); ?>" target="_blank"><button id="" class="btn btn-info btn-xs">详情</button></a> </span></td>
							</tr>
							<tr>
								<td class="col1"><span>1</span></td>
								<td class="col2"><span>24564346864</span></td>
								<td class="col3"><span>校长</span></td>
								<td class="col4"><span>查看查看查看查看查看查看查看查看查看查看查看查看查看查看查看</span></td>
								<td class="col5"><span>未处理</span></td>
								<td class="col6"><span>一般</span></td>
								<td class="col7"><span>2018/01/22</span></td>
								<td class="col8"><span> <a href="<?php echo url('Orders/orders'); ?>" target="_blank"><button id="" class="btn btn-info btn-xs">详情</button></a> </span></td>
							</tr>
						</tbody>
					</table>

				</div>
			</div>
		</div>

		<!--Basic Scripts-->
		<script src="__STATIC__/index/js/jquery-3.2.1.min.js"></script>
		<script src="__STATIC__/index/js/bootstrap.min.js"></script>
		<script src="__STATIC__/index/js/header.js"></script>
		<script src="__STATIC__/admin/js/alarm.js"></script>

	</body>

</html>