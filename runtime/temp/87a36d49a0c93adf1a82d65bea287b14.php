<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:69:"C:\wnmp\nginx\html\tp5\public/../application/index\view\map\test.html";i:1515372206;}*/ ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
		<script src="__STATIC__/index/js/jquery-3.2.1.min.js"></script>
	</head>
	<body>
		<style>
			.hw{
				width: 800px;
				height: 600px;
			}
		</style>
		<button id="go">查找</button>
		<div id="map_wrap" class="hw"></div><input type="hidden" id="m2_lnglat">
		
	</body>
</html>
<script>
	$(function() {
		var map = null;
		var infoWindow=null;
		var marker = null;
		var lnglats=[
			
		];
		var deviceNames=[
			
		];
		$("#go").click(function() {
			var aa='ss';
			$.post("Test/doWork", {
				aa: aa 
			},
		    function(data){
			    console.log("Data Loaded: " + typeof(data));
			    for(var o in data){  
			        var coori = data[o].coordinate.split(",");
					lnglat = [parseFloat(coori[0]), parseFloat(coori[1])];
					lnglats.push(lnglat);
					deviceNames.push(data[o].deviceName);
	      		}  
	      		console.log(lnglats);
				//=========地图处理开始=========
				$.getScript("http://webapi.amap.com/maps?v=1.4.2&key=4e8d9a6aed5424c709d4a60789ab7762", function(){
					init();
					function init(){
				    	map= new AMap.Map("map_wrap", {
						    resizeEnable: true,
						    center: [118.281854,24.671543],
						    zoom: 16
						});  
						addMarker();
				    } 
				    var infoWindow = new AMap.InfoWindow();
				    function addMarker() {
				        map.clearMap();
						for(var i = 0, marker; i < lnglats.length; i++){
						    marker=new AMap.Marker({
						        position:lnglats[i],
						        map:map
						    });
						    marker.content='<div class="info-title">高德地图</div><div class="info-content">'+
							                '<img src="https://webapi.amap.com/images/amap.jpg">'+
							                '高德是中国领先的数字地图内容、导航和位置服务解决方案提供商。<br/>'+
							                '<a target="_blank" href = "https://mobile.amap.com/">点击下载高德地图--'+deviceNames[i]+'--</a></div>';
						    //给Marker绑定单击事件
						    marker.on('click', markerClick);
						}
						map.setFitView();
				    }
				    function markerClick(e){
					    infoWindow.setContent(e.target.content);
					    infoWindow.open(map, e.target.getPosition());
					}
				});
				//=============地图处理结束============
		    }, "json");
		})
	})
</script>

