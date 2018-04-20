<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:74:"C:\wnmp\nginx\html\tp5\public/../application/index\view\project\alarm.html";i:1520990997;}*/ ?>
<div class="row part">
	<div class="col-sm-12 right-area-title1">
		<h4>报警情况</h4>
	</div>
	<div class="col-sm-12 table-responsive">
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>产品编号</th>
					<th>烟雾报警</th>
					<th>温度报警</th>
					<th>开关报警</th>
					<th>桶满报警</th>
					<th>负载报警</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>0010</td>
					<td>是</td>
					<td>否</td>
					<td>否</td>
					<td>无</td>
					<td>否</td>
				</tr>
				<tr>
					<td>0011</td>
					<td>是</td>
					<td>否</td>
					<td>否</td>
					<td>是</td>
					<td>否</td>
				</tr>
				<tr>
					<td>0012</td>
					<td>是</td>
					<td>否</td>
					<td>是</td>
					<td>无</td>
					<td>否</td>
				</tr>
			</tbody>
		</table>
		<div class="data-empty">无记录</div>
		<script type="text/javascript">
			var t = document.getElementsByTagName("table")[0].innerHTML;
			if(t) {
				document.getElementsByClassName("data-empty")[0].style.display = "none";
			} else {
				document.getElementsByClassName("data-empty")[0].style.display = "";
			}
		</script>
	</div>
</div>