<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:86:"C:\wnmp\nginx\html\tp5\public/../application/index\view\single_right_area\control.html";i:1520842284;}*/ ?>
<div class="scontrol row part">
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title" id="myModalLabel">设备信息</h4>
				</div>
				<div class="modal-body" style="padding: 3rem;padding-top: 1rem;">

				</div>

			</div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal -->
	</div>
	<div class=" col-md-12 right-area-title1">
			<h4>可执行操作:</h4>
	</div>
	<div class=" col-md-3">
		<div class="scontrol-one">
			<div class="scontrol-operate">
				<button type="button" class="btn btn-info">开灯</button>
			</div>
			<div class="scontrol-result">
				<p class="text-warning">暂无相关数据</p>
			</div>
		</div>
	</div>
	<div class=" col-md-3">
		<div class="scontrol-one">
			<div class="scontrol-operate">
				<button type="button" class="btn btn-info">关灯</button>
			</div>
			<div class="scontrol-result">
				<p class="text-warning">正在为您处理请求……</p>
			</div>
		</div>
	</div>
	<div class="col-md-3">
		<div class="scontrol-one">
			<div class="scontrol-operate">
				<button type="button" class="btn btn-info">闪灯</button>
			</div>
			<div class="scontrol-result">
				<p class="text-warning">操作成功！</p>
			</div>
		</div>
	</div>
	<div class="col-md-3">
		<div class="scontrol-one">
			<div class="scontrol-operate">
					<button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">点击触发模态框</button>
			</div>
			<div class="scontrol-result">
				<p class="text-warning">暂无相关数据</p>
			</div>
		</div>
	</div>
</div>