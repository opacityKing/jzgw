<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:76:"C:\wnmp\nginx\html\tp5\public/../application/index\view\single\realtime.html";i:1520842772;}*/ ?>
<div class="realtime-wrap part row">
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
					<div class="data-empty">无记录</div>
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
					<div class="data-empty">无记录</div>
				</div>

			</div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal -->
	</div>

	<div class=" col-md-12 right-area-title1">
		<h4>可查询类别</h4>
	</div>

	<div class="col-lg-4">
		<div class="scontrol-one">
			<div class="scontrol-title">
				<h4>点击查询数据:</h4>
				<div class="btn-group" role="group" aria-label="...">
					<button id="realtime_mdata2" type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal_second">实时数据</button>
				</div>
			</div>
		</div>
	</div>
	<div class="col-lg-4">
		<div class="scontrol-one">
			<div class="scontrol-title">
				<h4>点击查询数据:</h4>
				<div class="btn-group" role="group" aria-label="...">
					<button id="realtime_mdata3" type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal_third">设备配置</button>
				</div>
			</div>
		</div>
	</div>
</div>
<script src="__STATIC__/index/js/single_realtime.js"></script>