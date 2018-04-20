<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:77:"C:\wnmp\nginx\html\tp5\public/../application/index\view\group\addcontrol.html";i:1515660780;}*/ ?>
<div class="col-sm-12">
	<div class="right-area-title1">
		<h4>添加控制</h4>
	</div>
</div>
<div class="col-sm-12 col-md-8 col-lg-7 col-md-offset-1 col-lg-offset-2">
	<form class="form-horizontal" action="addControl" method="post" style="height: 20rem;">

		<div class="form-group">
			<label for="" class="col-sm-2 control-label">组内操作：</label>
			<div class="col-sm-10">
				<div class="dropdown">
					<button class="btn btn-default dropdown-toggle form-control" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
    您可以自定义组内可执行的操作
    <span class="caret"></span>
  </button>
					<ul class="dropdown-menu" aria-labelledby="dropdownMenu1" style="width: 100%;padding: 3px 20px;">
						<li>
							<div class="checkbox">
								<label>
    <input type="checkbox" name="goperate[]" value="a">
    Option one is this and that
  </label>
							</div>
						</li>
						<li>
							<div class="checkbox">
								<label>
    <input type="checkbox" name="goperate[]" value="s">
    Option that&mdash;be sure 
  </label>
							</div>
						</li>
						<li>
							<div class="checkbox">
								<label>
    <input type="checkbox" name="goperate[]" value="d">
    and that&mdash; it's great
  </label>

							</div>
						</li>
						<li>
							<div class="checkbox">
								<label>
    <input type="checkbox" name="goperate[]" value="f">
     why it's great
  </label>

							</div>
						</li>
					</ul>
				</div>

			</div>
		</div>

		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
				<input type="hidden" name="groupid" value="0010" />
				<button type="submit" class="pull-right btn btn-primary">确认添加</button>
			</div>
		</div>
	</form>
</div>