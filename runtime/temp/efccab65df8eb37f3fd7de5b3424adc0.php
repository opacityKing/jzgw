<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:70:"C:\wnmp\nginx\html\tp5\public/../application/index\view\order\all.html";i:1520844302;}*/ ?>
<div class="row part">
	<div class="col-sm-12 right-area-title1">
		<h4>历史工单</h4>
	</div>
	<!--查看详情的模态框-->
	<div class="modal fade" id="myModal_detail" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title" id="myModalLabel">工单详情</h4>
				</div>
				<div class="modal-body" style="padding-top: 1rem;">
					<form class="form-horizontal">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">工单编号</label>
							<div class="col-sm-10">
								<p class="form-control">这是该工单的编号</p>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">工单标题</label>
							<div class="col-sm-10">
								<p class="form-control">这是该工单的标题</p>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">添加日期</label>
							<div class="col-sm-10">
								<p class="form-control">这是该工单的添加时间</p>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">问题描述</label>
							<div class="col-sm-10">
								<p class="form-control" rows="3" style="height:10rem;overflow: auto;">这是该工单的简要描述这是该分组的简要描述这是该分组的简要描述这是该分组的简要描述这是该分组的简要描述这是该分组的简要描述这是该分组的简要描述</p>
							</div>
						</div>
					</form>

				</div>

			</div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal -->
	</div>
	<div class="col-sm-12 table-responsive">
		<table class="table table-bordered ">
			<thead>
				<tr>
					<th>工单号</th>
					<th>提交时间</th>
					<th>接单人</th>
					<th>联系电话</th>
					<th>服务内容</th>
					<th>操作</th>
				</tr>
			</thead>
			<tbody>
				<tr id="morder_ready">
					<td>232222</td>
					<td>232222</td>
					<td>232222</td>
					<td>232222</td>
					<td>232222</td>
					<td><button type="button" class="btn btn-xs btn-default" data-toggle="modal" data-target="#myModal_detail">查看详情</button></td>
				</tr>
				<tr id="morder_ing">
					<td>eeee2</td>
					<td>2fff2</td>
					<td>2ffgggg2</td>
					<td>23yyyy2</td>
					<td>2ffff2</td>
					<td><button type="button" class="btn btn-xs btn-default" data-toggle="modal" data-target="#myModal_detail">查看详情</button></td>
				</tr>
				<tr id="morder_ed">
					<td>232222</td>
					<td>23rrr22</td>
					<td>2hrgg2</td>
					<td>232222</td>
					<td>232222</td>
					<td><button type="button" class="btn btn-xs btn-default" data-toggle="modal" data-target="#myModal_detail">查看详情</button></td>
				</tr>
			</tbody>
		</table>
	</div>
</div>