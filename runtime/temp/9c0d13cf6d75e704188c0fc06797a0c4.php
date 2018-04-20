<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:74:"C:\wnmp\nginx\html\tp5\public/../application/index\view\group\control.html";i:1520900349;}*/ ?>
<div class="scontrol row part">
	<!--添加的模态框-->
	<div class="modal fade" id="myModal_add" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title" id="myModalLabel">批量添加设备</h4>
				</div>
				<div class="modal-body" style="padding: 3rem;padding-top: 1rem;">
					<form action="addDevice">
						<div class="form-group">
							<input type="text" name="startnum" class="form-control" placeholder="请输入开始设备编号" />
						</div>
						<div class="form-group">
							<input type="text" name="endnum" class="form-control" placeholder="请输入结束设备编号" />
						</div>
						<div class="form-group">
							<input type="hidden" name="groupid" value="1" />
							<button type="submit" class="btn btn-primary pull-right">确认添加</button>
						</div>
					</form>

				</div>

			</div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal -->
	</div>
	<!--删除的模态框-->
	<div class="modal fade" id="myModal_del" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title" id="myModalLabel">批量删除设备</h4>
				</div>
				<div class="modal-body" style="padding: 3rem;padding-top: 1rem;">
					<form action="delDevice">
						<div class="form-group">
							<input type="text" name="startnum" class="form-control" placeholder="请输入开始设备编号" />
						</div>
						<div class="form-group">
							<input type="text" name="endnum" class="form-control" placeholder="请输入结束设备编号" />
						</div>
						<div class="form-group">
							<input type="hidden" name="groupid" value="1" />
							<button type="submit" class="btn btn-primary pull-right">确认删除</button>
						</div>
					</form>

				</div>

			</div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal -->
	</div>
	<div class="col-sm-12 right-area-title1">
		<h4>可执行操作:</h4>
	</div>
	<div class=" col-md-3 col-sm-6 col-xs-12">
		<div class="scontrol-one">
			<div class="scontrol-title">
				<h4>请点击按钮执行:</h4>
				<div class="btn-group" role="group" aria-label="...">
					<button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">添加设备</button>
					<ul class="dropdown-menu list-group">
						<li class="list-group-item hand">
							<form action="addDevice">
								<input type="hidden" name="groupid" value="1" />
								<input type="text" name="startnum" class="form-control" placeholder="请输入设备编号" />
								<button type="button" class="btn btn-xs btn-primary" data-toggle="modal" data-target="#myModal_add">批量添加</button>
								<button type="submit" class="btn btn-xs btn-primary">确认添加</button>
							</form>
						</li>
					</ul>
				</div>
			</div>
			<div class="scontrol-title">
				<h4>操作结果如下:</h4>
			</div>
			<div class="scontrol-result">
				<p>暂无相关数据</p>
			</div>
		</div>
	</div>
	<div class=" col-md-3 col-sm-6 col-xs-12">
		<div class="scontrol-one">
			<div class="scontrol-title">
				<h4>请点击按钮执行:</h4>
				<div class="btn-group" role="group" aria-label="...">
					<button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">删除设备</button>
					<ul class="dropdown-menu list-group">
						<li class="list-group-item hand">
							<form action="delDevice">
								<input type="hidden" name="groupid" value="1" />
								<input type="text" name="startnum" class="form-control" placeholder="请输入设备编号" />
								<button type="button" class="btn btn-xs btn-primary" data-toggle="modal" data-target="#myModal_del">批量删除</button>
								<button type="submit" class="btn btn-xs btn-primary">确认删除</button>
							</form>
						</li>
					</ul>
				</div>
			</div>
			<div class="scontrol-title">
				<h4>操作结果如下:</h4>
			</div>
			<div class="scontrol-result">
				<p>暂无相关数据</p>
			</div>
		</div>
	</div>
	<div class=" col-md-3 col-sm-6 col-xs-12">
		<div class="scontrol-one">
			<div class="scontrol-title">
				<h4>请点击按钮执行:</h4>
				<div class="btn-group" role="group" aria-label="...">
					<button type="button" class="btn btn-info">开灯</button>
				</div>
			</div>
			<div class="scontrol-title">
				<h4>操作结果如下:</h4>
			</div>
			<div class="scontrol-result">
				<p>暂无相关数据</p>
			</div>
		</div>
	</div>
	<div class=" col-md-3 col-sm-6 col-xs-12">
		<div class="scontrol-one">
			<div class="scontrol-title">
				<h4>请点击按钮执行:</h4>
				<div class="btn-group" role="group" aria-label="...">
					<button type="button" class="btn btn-info">关灯</button>
				</div>
			</div>
			<div class="scontrol-title">
				<h4>操作结果如下:</h4>
			</div>
			<div class="scontrol-result">
				<p>暂无相关数据</p>
			</div>
		</div>
	</div>
	<div class=" col-md-3 col-sm-6 col-xs-12">
		<div class="scontrol-one">
			<div class="scontrol-title">
				<h4>请点击按钮执行:</h4>
				<div class="btn-group" role="group" aria-label="...">
					<button type="button" class="btn btn-info">闪灯</button>
				</div>
			</div>
			<div class="scontrol-title">
				<h4>操作结果如下:</h4>
			</div>
			<div class="scontrol-result">
				<p>暂无相关数据</p>
			</div>
		</div>
	</div>

	<div class=" col-md-3 col-sm-6 col-xs-12">
		<div class="scontrol-one">
			<div class="scontrol-title">
				<h4>请点击按钮执行:</h4>
				<div class="btn-group" role="group" aria-label="...">
					<button type="button" class="btn btn-info">调节占空比</button>
				</div>
			</div>
			<div class="scontrol-title">
				<h4>操作结果如下:</h4>
			</div>
			<div class="scontrol-result">
				<p>暂无相关数据</p>
			</div>
		</div>
	</div>
	<div class=" col-md-3 col-sm-6 col-xs-12">
		<div class="scontrol-one">
			<div class="scontrol-title">
				<h4>请点击按钮执行:</h4>
				<div class="btn-group" role="group" aria-label="...">
					<button type="button" class="btn btn-info">解除控制</button>
				</div>
			</div>
			<div class="scontrol-title">
				<h4>操作结果如下:</h4>
			</div>
			<div class="scontrol-result">
				<p>暂无相关数据</p>
			</div>
		</div>
	</div>

</div>