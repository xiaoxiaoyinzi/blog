{{--<!DOCTYPE html>--}}
{{--<html>--}}
{{--<head>--}}
    {{--<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />--}}
    {{--<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />--}}
    {{--<style type="text/css">--}}
        {{--body, html,#allmap {width: 100%;height: 100%;overflow: hidden;margin:0;font-family:"微软雅黑";}--}}
    {{--</style>--}}
    {{--<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=MI4ZG0OfKfWv0QG5HEKOd35RtW3xQ8ip"></script>--}}
    {{--<title>地图展示</title>--}}
{{--</head>--}}
{{--<body>--}}
{{--<div id="allmap"></div>--}}
{{--</body>--}}
{{--</html>--}}
{{--<script type="text/javascript">--}}
    {{--// 百度地图API功能--}}
    {{--var map = new BMap.Map("allmap");    // 创建Map实例--}}
    {{--map.centerAndZoom(new BMap.Point(116.776, 36.579), 16);  // 初始化地图,设置中心点坐标和地图级别--}}
    {{--map.addControl(new BMap.MapTypeControl());   //添加地图类型控件--}}
    {{--map.setCurrentCity("北京");          // 设置地图显示的城市 此项是必须设置的--}}
    {{--map.enableScrollWheelZoom(true);     //开启鼠标滚轮缩放--}}
{{--</script>--}}
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>地图显示</title>
    <script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=MI4ZG0OfKfWv0QG5HEKOd35RtW3xQ8ip"></script>
    <script src="http://d1.lashouimg.com/static/js/release/jquery-1.4.2.min.js" type="text/javascript"></script>
    <style type="text/css">
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
</head>
<body>
<div style="width:100%;height:100%;border:1px solid gray" id="container"></div>
</body>
</html>
<script type="text/javascript">
    {{--var map = new BMap.Map("container");--}}
    {{--map.centerAndZoom(new BMap.Point(116.776, 36.579), 12);--}}
    {{--map.addControl(new BMap.MapTypeControl());--}}
    {{--map.enableScrollWheelZoom();--}}
            {{--@foreach($data as $v)--}}
{{--//    var marker=new BMap.Marker(new BMap.Point(116.7842370000,36.5833780000));--}}
    {{--var point = new BMap.Point({{$v->longitude}},{{$v->latitude}});--}}
    {{--var marker=new BMap.Marker(new BMap.Point({{$v->longitude}},{{$v->latitude}}));--}}
    {{--var marker=new BMap.Marker(point);--}}


    {{--map.addOverlay(marker); // 将标注添加到地图中--}}
    {{--marker.setAnimation(BMAP_ANIMATION_BOUNCE); //跳动的动画--}}

{{--//    var licontent="<b>tw1</b><br>";--}}
{{--//    licontent+="<span><strong>地址：</strong>济南市长清区通发大道2299号</span><br>";--}}
{{--//    licontent+="<span><strong>气体浓度：</strong>20</span><br>";--}}
{{--//    licontent+="<span class=\"input\"><strong></strong><input class=\"outset\" type=\"text\" name=\"origin\" value=\"预留输入框\"/><input class=\"outset-but\" type=\"button\" value=\"公交\" onclick=\"gotobaidu(1)\" /><input class=\"outset-but\" type=\"button\" value=\"驾车\"  onclick=\"gotobaidu(2)\"/><a class=\"gotob\" href=\"url=\"http://api.map.baidu.com/direction?destination=latlng:"+marker.getPosition().lat+","+marker.getPosition().lng+"|name:天安门"+"®ion=北京"+"&output=html\" target=\"_blank\"></a></span>";--}}
{{--//--}}
{{--//    var hiddeninput="<input type=\"hidden\" value=\""+'北京'+"\" name=\"region\" /><input type=\"hidden\" value=\"html\" name=\"output\" /><input type=\"hidden\" value=\"driving\" name=\"mode\" /><input type=\"hidden\" value=\"latlng:"+marker.getPosition().lat+","+marker.getPosition().lng+"|name:天安门"+"\" name=\"destination\" />";--}}
{{--//--}}
{{--//    var content1 ="<form id=\"gotobaiduform\" action=\"http://api.map.baidu.com/direction\" target=\"_blank\" method=\"get\">" + licontent +hiddeninput+"</form>";--}}
{{--//--}}
{{--//    var opts1 = { width: 300 };--}}
{{--//--}}
{{--//    var  infoWindow = new BMap.InfoWindow(content1, opts1);--}}
{{--//    marker.openInfoWindow(infoWindow);--}}
{{--//    marker.addEventListener('click',function(){--}}
{{--//        marker.openInfoWindow(infoWindow);--}}
{{--//    });--}}

    {{--var opts = {--}}
        {{--width : 200,     // 信息窗口宽度--}}
        {{--height: 100,     // 信息窗口高度--}}
        {{--title : "{{$v->category}}" , // 信息窗口标题--}}
        {{--enableMessage:true,//设置允许信息窗发送短息--}}

    {{--}--}}
    {{--var infoWindow = new BMap.InfoWindow("地址：北京市东城区王府井大街88号乐天银泰百货八层", opts);  // 创建信息窗口对象--}}
    {{--marker.addEventListener("click", function(){--}}
        {{--map.openInfoWindow(infoWindow,point); //开启信息窗口--}}
    {{--});--}}
   {{--@endforeach--}}
    {{--map.addControl(new BMap.NavigationControl());--}}
    {{--map.addControl(new BMap.ScaleControl({anchor:BMAP_ANCHOR_TOP_LEFT}));--}}
    {{--map.setMapStyle({style:'googlelite'});--}}
   {{--// .anchorBL{display:none;}--}}
    // 百度地图API功能
    map = new BMap.Map("container");
    map.centerAndZoom(new BMap.Point(116.776, 36.579), 13);
    map.addControl(new BMap.MapTypeControl());
    map.enableScrollWheelZoom();
    var data_info = [
            @foreach($data as $v)
        [{{$v->longitude}},{{$v->latitude}},"地址：{{$v->install_address}}</br>气体浓度：{{$v->gass_chroma}}</br>传感器状态：{{$v->sensor_status}}</br>水位状态：{{$v->waterline_status}}</br>电池状态：{{$v->battery_status}}</br>上传时间：{{$v->post_date}}"],
            @endforeach
    ];
    var opts = {
        width : 250,     // 信息窗口宽度
        height: 150,     // 信息窗口高度
        title : "信息窗口" , // 信息窗口标题
        enableMessage:true//设置允许信息窗发送短息
    };
    for(var i=0;i<data_info.length;i++){
        var marker = new BMap.Marker(new BMap.Point(data_info[i][0],data_info[i][1]));  // 创建标注
        var content = data_info[i][2];
        map.addOverlay(marker);               // 将标注添加到地图中
        marker.setAnimation(BMAP_ANIMATION_BOUNCE); //跳动的动画
        addClickHandler(content,marker);
    }
    function addClickHandler(content,marker){
        marker.addEventListener("click",function(e){
            openInfo(content,e)}
        );
    }
    function openInfo(content,e){
        var p = e.target;
        var point = new BMap.Point(p.getPosition().lng, p.getPosition().lat);
        var infoWindow = new BMap.InfoWindow(content,opts);  // 创建信息窗口对象
        map.openInfoWindow(infoWindow,point); //开启信息窗口
    }
    map.addControl(new BMap.NavigationControl());
    map.addControl(new BMap.ScaleControl({anchor:BMAP_ANCHOR_TOP_LEFT}));
    map.setMapStyle({style:'googlelite'});

</script>

