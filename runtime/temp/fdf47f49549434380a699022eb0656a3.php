<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:89:"C:\wnmp\nginx\html\tp5\public/../application/index\view\single_right_area\historical.html";i:1520842500;}*/ ?>
<div class="historical-wrap part">
	<div class=" col-md-12 right-area-title1 sconsole-title1-border">
		<h4>历史数据</h4>
	</div>
	<div class="modal-ulout-wrap">
		<ul class="modal-ulout">
			<li class="modal-ulout-lilastno"><span>请选择日期：</span>
				<input id="sel_date" type="date" />
			</li>
			<li class="modal-ulout-lilastno">
				<span>请选择时间：</span>
				<select id="sel_day" name="save_time_H">
					<option value="">一天</option>
					<option value="00">0</option>
					<option value="01">1</option>
					<option value="02">2</option>
					<option value="03">3</option>
					<option value="04">4</option>
					<option value="05">5</option>
					<option value="06">6</option>
					<option value="07">7</option>
					<option value="08">8</option>
					<option value="09">9</option>
					<option value="10">10</option>
					<option value="11">11</option>
					<option value="12">12</option>
					<option value="13">13</option>
					<option value="14">14</option>
					<option value="15">15</option>
					<option value="16">16</option>
					<option value="17">17</option>
					<option value="18">18</option>
					<option value="19">19</option>
					<option value="20">20</option>
					<option value="21">21</option>
					<option value="22">22</option>
					<option value="23">23</option>
				</select>
			</li>
			<li>
				<button id="sel_ok" class="btn ">查询</button>
			</li>
		</ul>
	</div>
	<div class="table-fixhead-wrap">

		<!--模态框主体表格之头部-->

		<table class="table table-header">
			<thead>
				<tr>
					<th class="" title="电池电压/V"><span class="Cicon"> <span class="Cicon Cicon-modal-dc"></span></span>
					</th>
					<th class="" title="太阳能板电压/V"><span class="Cicon"><span class="Cicon Cicon-modal-tyn"></span></span>
					</th>
					<th class="" title="日期"><span class="Cicon"><span class="Cicon Cicon-modal-rq"></span></span>
					</th>
					<th class="" title="温度℃"><span class="Cicon"><span class="Cicon Cicon-modal-wd"></span></span>
					</th>
					<th class="" title="小时"><span class="Cicon"><span class="Cicon Cicon-modal-sj"></span></span>
					</th>
					<th class="" title="小时"><span class="Cicon"><span class="Cicon Cicon-modal-sj"></span></span>
					</th>
					<th class="" title="小时"><span class="Cicon"><span class="Cicon Cicon-modal-sj"></span></span>
					</th>
				</tr>
			</thead>
		</table>
		<!--模态框主体表格之主体-->
		<div class="table-box">

			<table class="table table-body">
				<tbody id="mdata1">
					<tr>
						<td><span>sff呃呃呃鹅鹅鹅额鹅鹅鹅鹅鹅鹅f</span></td>
						<td><span>sff呃呃呃鹅鹅鹅额鹅鹅鹅鹅鹅鹅f</span></td>
						<td><span>sff呃呃呃鹅鹅鹅额鹅鹅鹅鹅鹅鹅f</span></td>
						<td><span>sff呃呃呃鹅鹅鹅额鹅鹅鹅鹅鹅鹅f</span></td>
						<td><span>sff呃呃呃鹅鹅鹅额鹅鹅鹅鹅鹅鹅f</span></td>
						<td><span>sff呃呃呃鹅鹅鹅额鹅鹅鹅鹅鹅鹅f</span></td>
						<td><span>sff呃呃呃鹅鹅鹅额鹅鹅鹅鹅鹅鹅f</span></td>
					</tr>
				</tbody>
			</table>
			<div class="data-empty">请选择查询条件后点击查询按钮！</div>
		</div>
	</div>
</div>
<script src="__STATIC__/index/js/single_historical.js"></script>