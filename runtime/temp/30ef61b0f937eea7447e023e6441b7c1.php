<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:76:"C:\wnmp\nginx\html\tp5\public/../application/index\view\group\adddevice.html";i:1515660775;}*/ ?>
<div class="col-sm-12">
	<div class="right-area-title1">
		<h4>添加设备</h4>
	</div>
</div>
<div class="col-sm-12 col-md-8 col-lg-7 col-md-offset-1 col-lg-offset-2">
	<form class="form-horizontal" action="addDevice" method="post">
	
		<div class="form-group">
			<label for="" class="col-sm-2 control-label">添加设备：</label>

			<div class="col-sm-5">
				<input type="number" min="0" name="gstart" class="form-control" id="" placeholder="请输入开始设备编号">
			</div>
			<div class="col-sm-5">
				<input type="number" min="0" name="gend" class="form-control" id="" placeholder="请输入结束设备编号">
			</div>

			<p class="help-block col-sm-10 col-sm-offset-2">注：结束设备编号默认等于开始设备编号，即添加单个设备.</p>

		</div>
		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
				<input type="hidden" name="groupid" value="0010" />
				<button type="submit" class="pull-right btn btn-primary">确认添加</button>
			</div>
		</div>
	</form>
</div>
<script>
	
</script>