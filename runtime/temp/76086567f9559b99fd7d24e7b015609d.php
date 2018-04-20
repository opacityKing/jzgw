<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:72:"C:\wnmp\nginx\html\tp5\public/../application/index\view\index\jzmap.html";i:1523434311;}*/ ?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no, width=device-width">
    <title>默认带导航搜索样式信息窗体</title>
    <link rel="stylesheet" href="http://cache.amap.com/lbs/static/main1119.css"/>
    <style type="text/css">
        .info-title {
            color: white;
            font-size: 14px;
            background-color: blue;
            line-height: 26px;
            padding: 0px 0 0 6px;
            font-weight: lighter;
            letter-spacing: 1px
        }

        .info-content {
            font: 12px Helvetica, 'Hiragino Sans GB', 'Microsoft Yahei', '微软雅黑', Arial;
            padding: 4px;
            color: #666666;
            line-height: 23px;
        }

        .info-content img {
            float: left;
            margin: 3px;
        }
    </style>
    <script type="text/javascript"
            src="http://webapi.amap.com/maps?v=1.4.5&key=e504547dd278df0af5f1ab8f7ddcc475&plugin=AMap.AdvancedInfoWindow"></script>
</head>
<body>
<div id="container"></div>
<script type="text/javascript">
    //地图初始化时，在地图上添加一个marker标记,鼠标点击marker可弹出自定义的信息窗体
    var map = new AMap.Map("container", {
        resizeEnable: true,
        center: [116.481181, 39.989792],
        zoom: 16
    });
    addMarker();
    //添加marker标记
    function addMarker() {
        map.clearMap();
        var marker = new AMap.Marker({
            map: map,
            position: [116.481181, 39.989792]
        });
        //鼠标点击marker弹出自定义的信息窗体
        AMap.event.addListener(marker, 'click', function () {
            infoWindow.open(map, marker.getPosition());
        });
    }

    //实例化信息窗体
    var content = '<div class="info-title">高德地图</div><div class="info-content">' +
        '<img src="http://webapi.amap.com/images/amap.jpg">' +
        '高德是中国领先的数字地图内容、导航和位置服务解决方案提供商。<br/>' +
        '<a target="_blank" href = "http://mobile.amap.com/">点击下载高德地图</a></div>';
    var infoWindow = new AMap.AdvancedInfoWindow({
        content: content,
        offset: new AMap.Pixel(0, -30)
    });


    //关闭信息窗体
    function closeInfoWindow() {
        map.clearInfoWindow();
    }
</script>
<script type="text/javascript" src="http://webapi.amap.com/demos/js/liteToolbar.js"></script>
</body>
</html>