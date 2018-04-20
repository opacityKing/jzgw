<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:72:"C:\wnmp\nginx\html\tp5\public/../application/app\view\revise\revise.html";i:1517908955;}*/ ?>
<!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<title>修改设备名称</title>
		<link href="__STATIC__/index/css/bootstrap.min.css" rel="stylesheet">
		<script src="__STATIC__/index/js/jquery-3.2.1.min.js"></script>
		<style type="text/css">
			.part2,
			.part2 th {
				text-align: center;
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
			<!--主显示区之第二部分——表格-->
			<div class="part2">
				<!--表格标题-->
				<h3>设备列表</h3><p class="load"></p>
				<!--表格-->
				<table class="table table-bordered table-striped table-hover" border="" cellspacing="" cellpadding="">
					<tbody class="rs">
						<tr>
							<th>mac</th>
							<th>name</th>
							<th>日期</th>
							<th>操作</th>
						</tr>
					</tbody>
				</table>
				
			</div>
		</div>
	</body>
	<script type="text/javascript">
		$(function() {
			$('.load').html("加载中...");
			$.post("deviceList", 
			function(data){
				//console.log(data.data);
				$("rs").html('<tr><th>mac</th><th>name</th><th>日期</th><th>操作</th></tr>');
				for(var k in data.data){
			    	$(".rs").append('<tr><td>'+data.data[k].mac+'</td><td class="name">'+data.data[k].name+'</td><td>'+data.data[k].timestamp+'</td><td><button class="btn btn-xs btn-info rwname">修改</button></td></tr>');
				}
				$('.load').html("加载完成");
			},"json");
			$(document).on('click','.rwname',function(){
//				console.log("选择的："+$(this).closest("tr").find(".mac").html());
				show_prompt($(this).closest("tr").find(".name").html());
	        	
	      	})
			function show_prompt(name) {
				var value = prompt('请输入设备名称 ',name);
				var name = name;
				if(value == null) {
				} else if(value == '') {
					alert('设备名称输入为空，请重新输入！');
					show_prompt(name);
				} else {
					if(value == name){
						alert('未做任何修改');
					}else{
//						console.log('你好，' + value);
						$.post("rwname", 
						{ name: name, rwname:value},
						function(data){
							alert(data.data);
							if(data.data=="修改成功！"){
								window.location.reload();//刷新当前页面.
							}
						},"json");
					}
					
				}
			}
		})
	</script>

</html>