<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:86:"C:\wnmp\nginx\html\tp5\public/../application/index\view\single_right_area\voltage.html";i:1520816544;}*/ ?>
<div class="voltage-wrap row part">
	<div class="modal-ulout-wrap">
		<ul class="modal-ulout list-unstyled list-inline">
			<li class="modal-ulout-lilastno">
				<span class="typespan">请选择类别</span>
				<select id="sel_type" name="sel_type">
					<option value="00">电池电压</option>
					<option value="01">太阳能电压</option>
					<option value="02">太阳能电压2</option>
					
				</select>
			</li>
			<li class="modal-ulout-lilastno"><span>请选择日期</span>
				<input id="sel_date" type="date" />
			</li>
			
			<li>
				<button id="sel_ok" class="btn btn-info btn-xs">查询</button>
			</li>
		</ul>
	</div>
	<div id="c1"></div>
</div>
<script src="__STATIC__/index/js/g2.min.js"></script>
<script src="__STATIC__/index/js/single_voltage.js"></script>