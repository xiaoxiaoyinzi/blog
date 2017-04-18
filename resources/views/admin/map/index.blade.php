<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <style type="text/css">
        body, html {width: 100%;height: 100%;margin:0;font-family:"微软雅黑";}
        #allmap{width:100%;height:100%;}

        .anchorBL{
            display:none;
        }
        html,body{
            width:100%;
            height:100%;
            margin:0;
            overflow:hidden;
            margin:0;
        }



    </style>
    <script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=MI4ZG0OfKfWv0QG5HEKOd35RtW3xQ8ip"></script>
    <title>单设备信息窗口</title>
</head>
<body>
<div id="allmap"></div>
</body>
</html>
<script type="text/javascript">
    // 百度地图API功能
    var map = new BMap.Map("allmap");
    var point = new BMap.Point({{$loca->longitude}},{{$loca->latitude}});
    map.addControl(new BMap.MapTypeControl());
    map.enableScrollWheelZoom();
    var marker = new BMap.Marker(point);  // 创建标注
    map.addOverlay(marker);              // 将标注添加到地图中
    marker.setAnimation(BMAP_ANIMATION_BOUNCE); //跳动的动画
    map.centerAndZoom(point, 17);
    var opts = {
        width : 250,     // 信息窗口宽度
        height: 150,     // 信息窗口高度
        title : "{{$loca->category}}", // 信息窗口标题
//        enableMessage:true,//设置允许信息窗发送短息
//        message:"亲耐滴，晚上一起吃个饭吧？戳下面的链接看下地址喔~"
    }
    var infoWindow = new BMap.InfoWindow("地址：{{$loca->install_address}}</br>气体浓度：{{$loca->gass_chroma}}</br>传感器状态：{{$loca->sensor_status}}</br>水位状态：{{$loca->waterline_status}}</br>电池状态：{{$loca->battery_status}}</br>上传时间：{{$loca->post_date}}", opts);  // 创建信息窗口对象
    marker.addEventListener("click", function(){
        map.openInfoWindow(infoWindow,point); //开启信息窗口
    });
    map.addControl(new BMap.NavigationControl());
    map.addControl(new BMap.ScaleControl({anchor:BMAP_ANCHOR_TOP_LEFT}));
    map.setMapStyle({style:'googlelite'});
</script>