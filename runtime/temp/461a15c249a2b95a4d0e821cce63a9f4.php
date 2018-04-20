<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:76:"C:\wnmp\nginx\html\tp5\public/../application/index\view\Test\test_point.html";i:1515370409;}*/ ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
		<script src="__STATIC__/index/js/jquery-3.2.1.min.js"></script>
		<!--<link href="__STATIC__/index/css/common.css"></link>-->
		<!--<script src="http://webapi.amap.com/ui/1.0/main.js?v=1.0.11"></script>-->
	</head>
	<body>
		<style>
			.hw{
				width: 800px;
				height: 600px;
			}
			
		</style>
		<button id="go">查找设备</button>
		<h3 class="show_msg">请点击查找设备</h3>
		<div id="map_wrap" class="hw"></div><input type="hidden" id="m2_lnglat">
		
	</body>
    <!-- UI组件库 1.0 -->
    <script>
	$(function() {
		var map = null;
		var infoWindow=null;
		var marker = null;
		var lnglats=[
			
		];
		var deviceNames=[
			
		];
		//生成地图
		$.getScript("http://webapi.amap.com/maps?v=1.4.2&key=4e8d9a6aed5424c709d4a60789ab7762", function(){
			
			//先生成地图
			infoWindow = new AMap.InfoWindow();
			map= new AMap.Map("map_wrap", {
			    resizeEnable: true,
			    center: [118.281854,24.671543],
			    zoom: 16
			});
			$.getScript("http://webapi.amap.com/ui/1.0/main.js?v=1.0.11", function(){
				
			})
			
		});
		//点击按钮生成设备点
		$("#go").click(function() {
			//处理点击设备跳转
			$("#goDevice").click(function() {
				console.log('设备触发,设备号为：'+$("#goDevice").val());
			})
			var aa='ss';
			$(".show_msg").html('请等待设备点生成');
			$.post("Test/doWork", {
				aa: aa 
			},
		    function(data){
			    //console.log("Data Loaded: " + data);
			    for(var o in data){  
			        var coori = data[o].coordinate.split(",");
					lnglats.push({
			            position: [
			                parseFloat(coori[0]),
			                parseFloat(coori[1])
			            ]
			        });
					deviceNames.push(data[o].deviceName);
	      	}  
				//=========地图处理开始=========
			
				init();
				function init(){
			    	
					
					AMapUI.load(['ui/misc/PointSimplifier', 'lib/$'], function(PointSimplifier, $) {

				       if (!PointSimplifier.supportCanvas) {
					        alert('当前环境不支持 Canvas！');
					        return;
					    }
					    //启动页面
					    initPage(PointSimplifier);
				    });
				    function initPage(PointSimplifier) {
					    //创建组件实例
					    var pointSimplifierIns = new PointSimplifier({
					        map: map, //关联的map
					        compareDataItem: function(a, b, aIndex, bIndex) {
					            //数据源中靠后的元素优先，index大的排到前面去
					            return aIndex > bIndex ? -1 : 1;
					        },
					        getPosition: function(dataItem) {
					            //返回数据项的经纬度，AMap.LngLat实例或者经纬度数组
					            return dataItem.position;
					        },
					        getHoverTitle: function(dataItem, idx) {
					            //返回数据项的Title信息，鼠标hover时显示
					            return '设备号为: ' + deviceNames[idx];
					        },
					        renderOptions: {
					            //点的样式
					            pointStyle: {
					                fillStyle: 'blue' //蓝色填充
					            }
					        }
					    });
						//放置数据
					    pointSimplifierIns.setData(lnglats);
					    //更改提示
					    $(".show_msg").html('设备点生成完成！');
					    //监听事件
					    pointSimplifierIns.on('pointClick pointMouseover', function(e, record) {
					    	if(e.type=='pointClick'){
					    
					        	console.log(record.data.position);
					    		console.log('位置为：'+record.index);
					    		console.log('设备名为：'+deviceNames[record.index]);
					    		var content='<p>小柳枝最漂亮了，小柳枝最聪明了，小柳枝最可爱了。小柳枝是大傻瓜呀，小柳枝是大懒猪啊</p><button id="goDevice" value="'+deviceNames[record.index]+'">查找设备</button>';
					    		
					    		infoWindow.setContent(content);
					    		infoWindow.open(map, record.data.position);
					    		
					    		setTimeout(function () {
							        //处理点击设备跳转
									$("#goDevice").click(function() {
										console.log('设备触发,设备号为：'+$("#goDevice").val());
									})
							    }, 200);
					    	}
					    });
					    
					}
					
			   }  
				//地图处理结束===
		}, "json");
		})
		
	})
</script>
</html>
