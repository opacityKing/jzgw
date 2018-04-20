<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:70:"C:\wnmp\nginx\html\tp5\public/../application/index\view\order\new.html";i:1520844568;}*/ ?>
<div class="row part">
	<div class="col-sm-12 right-area-title1 sconsole-title1-border">
		<h4>新建工单</h4>
	</div>
	<div class="col-sm-12 form-wrap">
		<form class="form-horizontal" action="order/order" method="post">

			<div class="form-group">
				<label class="col-sm-2 control-label">*优先级：</label>
				<div class="col-sm-10">
					<label class="radio-inline">
  <input type="radio" name="priority" id="normal" value="option1"> 一般
</label>
					<label class="radio-inline">
  <input type="radio" name="priority" id="urgent" value="option2"> 紧急
</label>
				</div>
			</div>
			<div class="form-group">
				<label for="" class="col-sm-2 control-label">*标题：</label>
				<div class="col-sm-10">
					<input type="text" name="title" class="form-control" id="" placeholder="简要说明问题，比如路灯故障等">
				</div>
			</div>
			<div class="form-group">
				<label for="" class="col-sm-2 control-label">*问题描述：</label>
				<div class="col-sm-10">
					<textarea name="content" class="form-control" rows="3" id="" placeholder="请详细说明问题，设备故障请说明设备号及故障现象等"></textarea>
				</div>
			</div>
			<div class="form-group">
				<label for="" class="col-sm-2 control-label">*联系方式：</label>
				<div class="col-sm-10">
					<input type="tel" name="phone" class="form-control" id="" placeholder="请输入您的联系方式">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
					<button type="submit" class="pull-right btn btn-primary">提交工单</button>
				</div>
			</div>
		</form>
	</div>
</div>