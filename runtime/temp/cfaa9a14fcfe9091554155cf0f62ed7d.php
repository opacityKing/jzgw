<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:68:"C:\wnmp\nginx\html\tp5\public/../application/app\view\data\data.html";i:1518426235;}*/ ?>
<!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<title>设备列表</title>
		
		<link href="__STATIC__/index/css/bootstrap.min.css" rel="stylesheet">
		<script src="__STATIC__/index/js/jquery-3.2.1.min.js"></script>
		<script src="__STATIC__/app/js/g2.min.js"></script>
		<style type="text/css">
			.part1,
			.part2,
			.part2 th {
				text-align: center;
			}
			
			.part1 {
				margin: 1rem 0;
			}
			
			.form-group {
				margin-right: 1rem;
			}
			
			.left-sidenav {
				position: fixed;
				top: 8rem;
				left: 0;
			}
			
			@media only screen and (min-width:992px) {
				body {
					padding-left: 8%;
				}
			}
			
			@media only screen and (min-width:1200px) {
				body {
					padding-left: 0;
				}
				.left-sidenav {
					left: 5%;
				}
			}
		</style>
	</head>

	<body>
		<div class="container">
			<!--主显示区之第一部分——表单-->
			<div class="part1">
				<div class="form-inline">
					<div class="form-group">
						<label for="">设备</label>
						<select class="form-control device_list" name="">
						</select>
					</div>
					<div class="form-group">
						<label for="">日期</label>
						<input type="date" class="form-control date_select" id="">
					</div>
					<button class="btn btn-info btn_serch">查询</button>
					<button type="button" class="btn btn-default">
						<a class="devices" href=<?php echo url('Bjld/revise'); ?>>设备列表</a>
					</button>
				</div>	
				<div class="load">请选择设备号和日期，并点击查询按钮</div>
			</div>
			<!--主显示区之第二部分——表格-->
			<div class="part2">
				<!--表格标题-->
				<h3>LED灯数据图表</h3>
				<div id="c1"></div>
				<!--表格-->
				<h3>LED灯数据表</h3>
				<table class="table table-bordered table-striped table-hover" border="" cellspacing="" cellpadding="">
					<tbody class="rs">
					<tr>
						<th>设备名称</th>
						<th>PWM调节值 </th>
						<th>电池电压值 </th>
						<th>太阳能板电压</th>
						<th>时间</th>
					</tr>
					</tbody>
				</table>
			</div>
		</div>
		<!--左侧导航-->
		<!--<div class="left-sidenav btn-group-vertical" role="group" aria-label="...">
			
			
		</div>-->
	</body>
	<script>
		//设置默认日期的方法
		(function() {
			var chartData =  [{
					value: 0,
					time: 0
			}];
//			//设置图表========================
//			
//				const data = [{
//					value: 13.5,
//					time: 20
//				},
//				{
//					value: 13.6,
//					time: 30
//				},
//				{
//					value: 12.7,
//					time: 69
//				},
//				{
//					value: 12.9,
//					time: 76
//				},
//				{
//					value: 12.9,
//					time: 79
//				},
//				{
//					value: 13.2,
//					time: 84
//				},
//				{
//					value: 13.4,
//					time: 89
//				},
//				{
//					value: 13.2,
//					time: 95
//				},
//				{
//					value: 13.0,
//					time: 119
//				},
//				{
//					value: 12.9,
//					time: 145
//				},
//				{
//					value: 12.9,
//					time: 175
//				},
//				{
//					value: 13.2,
//					time: 189
//				},
//				{
//					value: 13.4,
//					time: 210
//				},
//				{
//					value: 13.2,
//					time: 250
//				},
//				{
//					value: 13.0,
//					time: 265
//				},
//				{
//					value: 12.9,
//					time: 277
//				},
//				{
//					value: 12.9,
//					time: 290
//				},
//				{
//					value: 13.2,
//					time: 300
//				},
//				{
//					value: 13.4,
//					time: 320
//				},
//				{
//					value: 13.2,
//					time: 331
//				},
//				{
//					value: 13.0,
//					time: 364
//				},
//				{
//					value: 12.9,
//					time: 377
//				},
//				{
//					value: 12.9,
//					time: 388
//				},
//				{
//					value: 13.2,
//					time: 395
//				},
//				{
//					value: 13.4,
//					time: 450
//				},
//				{
//					value: 13.2,
//					time: 466
//				},
//				{
//					value: 13.0,
//					time: 490
//				}
//			];
			const chart = new G2.Chart({
				container: 'c1',
				//width:800,
				forceFit: true,
				height: 400
			});
			chart.source(chartData, {
				'time': {
					type: 'linear',
					nice: true,
					min: 0,
					max: 1439,
					tickCount: 10,
					formatter: function(time) {
						//处理下数据
						var hour = parseInt(time / 60) + '';
						if(hour.length < 2) {
							hour = '0' + hour;
						}
						var min = time % 60 + '';
						if(min.length < 2) {
							min = '0' + min;
						}
						return hour + ':' + min;;
		
					}
				},
				'value': {
					min: 12,
					max: 15,
					formatter: function(val) {
						return val + ' V';
		
					}
				}
			});
			//把线画出来
			chart.line().position('time*value').size(2);
			//把点打出来
			chart.point().position('time*value').size(2.5).shape('circle');
			//辅助线
			chart.tooltip({
				crosshairs: {
					type: 'y',
				}, // tooltip 辅助线配置
			});
			chart.render();
			//画图相关部分结束
			
			
			
			
			//==================================
			//设置默认日期为当天
			var nowDate = new Date();
			var year = nowDate.getFullYear();
			var month = nowDate.getMonth() + 1 < 10 ? "0" + (nowDate.getMonth() + 1) : nowDate.getMonth() + 1;
			var date = nowDate.getDate() < 10 ? "0" + nowDate.getDate() : nowDate.getDate();
			var str = year + "-" + month + "-" + date;
			$("input[type='date']").val(str);
			//设置最小日期为30天前
			var mindate = nowDate.getDate() - 30;
			nowDate.setDate(mindate);
			var y = nowDate.getFullYear();
			var m = nowDate.getMonth() + 1 < 10 ? "0" + (nowDate.getMonth() + 1) : nowDate.getMonth() + 1;
			var d = nowDate.getDate() < 10 ? "0" + nowDate.getDate() : nowDate.getDate();
			var min = y + "-" + m + "-" + d;
			$("input[type='date']").attr("min", min);
			//设置最大日期为当天
			$("input[type='date']").attr("max", str);
			
			
			//加载设备名
			$.post("Bjld/device", 
		    function(data){
			    for(var k in data.name){
			    	$(".device_list").append('<option value="">'+data.name[k].name+'</option>')
				}
		    }, "json");
				
			$(document).on('click','.btn_serch',function(){
//				console.log('选中的设备号为：'+$(".device_list option:selected").text());
//				console.log('时间为：'+$('.date_select').val());
				
				$(".load").html("加载中，请稍候......");
				$.post("Bjld/data", 
					{ name: $(".device_list option:selected").text(), date_select: $('.date_select').val()},
				function(data){
//					console.log(data.data);
				 	$(".rs").html('<tr><th>设备名称</th><th>PWM调节值 </th><th>电池电压值 </th><th>太阳能板电压</th><th>时间</th></tr>');
					var count=0;
					var updateData = [];
					for(var k in data.data){
						count++;
						//console.log(data.data[k]);
				    	$(".rs").append('<tr><td>'+data.data[k].mac+'</td><td>'+data.data[k].PWM_ADJUST+'</td><td>'+data.data[k].BAT_VOL+'</td><td>'+data.data[k].PV_Vol+'</td><td>'+data.data[k].timestamp+'</td></tr>')
						updateData.push($.parseJSON(data.chart[k]));
					}
					chart.changeData(updateData);
					if(count==0){
						$(".load").html("此条件下无数据！");
					}else{
						$(".load").html("加载完成！");
					}
					
				},"json");
	        	
	      	})
			
			
		})();
	</script>

</html>