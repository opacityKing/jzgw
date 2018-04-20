<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:75:"C:\wnmp\nginx\html\tp5\public/../application/index\view\member\account.html";i:1515726573;}*/ ?>
<div class="member-wrap">
	<div class="member-head">
		<div class="member-head-left pull-left">
			<h4>帐号管理</h4>
		</div>
		<div class="member-head-right pull-right">
			<!-- Nav tabs -->
			<ul class="nav nav-tabs" role="tablist">
				<li role="presentation" class="active">
					<a href="#m_info" aria-controls="home" role="tab" data-toggle="tab">基本资料</a>
				</li>
				<li role="presentation">
					<a href="#m_pwd" aria-controls="profile" role="tab" data-toggle="tab">密码相关</a>
				</li>
			</ul>
		</div>
	</div>
	<!-- Tab panes -->
	<div class="tab-content">
		<div role="tabpanel" class="tab-pane active" id="m_info">
			<form class="form-horizontal" action="member/info" method="post">
				<div class="form-group">
					<label for="" class="col-sm-2 control-label">用户名：</label>
					<div class="col-sm-10">
						<input type="text" name="phone" class="form-control" id="" placeholder="请输入您的用户名">
					</div>
				</div>
				<div class="form-group">
					<label for="" class="col-sm-2 control-label">手机号码：</label>
					<div class="col-sm-10">
						<input type="tel" name="phone" class="form-control" id="" placeholder="请输入您的手机号码">
					</div>
				</div>
				<div class="form-group">
					<label for="" class="col-sm-2 control-label">邮箱：</label>
					<div class="col-sm-10">
						<input type="email" name="phone" class="form-control" id="" placeholder="请输入您的邮箱">
					</div>
				</div>
				<div class="form-group">
					<label for="" class="col-sm-2 control-label">所在公司：</label>
					<div class="col-sm-10">

						<input type="text" name="address" class="form-control" id="" placeholder="请输入您所在公司的名称">

					</div>
				</div>
				<div class="form-group">
					<label for="" class="col-sm-2 control-label">个人简介：</label>
					<div class="col-sm-10">
						<textarea name="content" class="form-control" rows="3" id="" placeholder="请输入您的个人简介"></textarea>
					</div>
				</div>

				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<button type="submit" class="pull-right btn btn-warning">确认修改</button>
						<button type="button" class="pull-right btn btn-default">取消修改</button>
					</div>
				</div>
			</form>
		</div>
		<div role="tabpanel" class="tab-pane" id="m_pwd">
			<form class="form-horizontal" action="member/info" method="post">
				<div class="form-group">
					<label for="" class="col-sm-2 control-label">旧密码：</label>
					<div class="col-sm-10">
						<input type="password" name="oldpwd" class="form-control" id="" placeholder="请输入您现在所用的密码">
					</div>
				</div>
				<div class="form-group">
					<label for="" class="col-sm-2 control-label">新密码：</label>
					<div class="col-sm-10">
						<input type="password" name="newpwd" class="form-control" id="" placeholder="请输入您的新密码">
					</div>
				</div>
				<div class="form-group">
					<label for="" class="col-sm-2 control-label">确认密码：</label>
					<div class="col-sm-10">
						<input type="password" name="checkpwd" class="form-control" id="" placeholder="请再次输入您的新密码">
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<button type="submit" class="pull-right btn btn-warning">确认修改</button>
						<button type="button" class="pull-right btn btn-default">取消修改</button>
					</div>
				</div>
			</form>
		</div>
	</div>

</div>
</div>