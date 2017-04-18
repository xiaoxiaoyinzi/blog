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
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>添加用户信息</title>
    <script language="JavaScript" type="text/javascript" src="{{url('/style/js/jquery.js')}}"></script>


    <script>
        $(function (){
            //注册对话框
            $("#dialog").dialog({
                //设置对话框打开的方式 不是自动打开
                autoOpen:false,
                show:"blind",
                hide:"explode",
                modal:true,
                buttons:[
                    {
                        text:"添加",
                        click:function (){

                            //获取姓名
                            var name=$("input[id=name]").val();
                            //获取专业
                            var zhuanye=$("input[id=phone]").val();
                            //手机
                            var phone=$("input[id=zhiwei]").val();

                            var $tr=$("<tr style='background-color:#FFF'><td align='center' width='200'>"+name+"</td><td align='center' width='200'>"+zhuanye+"</td><td align='center' width='200'>"+phone+
                                "</td></tr>");
                            $tr.appendTo("#table2");
                            $(this).dialog("close");
                        }
                    },{
                        text:"取消",
                        click:function(){
                            $(this).dialog("close");
                        }
                    }
                ],
                closeOnEscape:false, //是否esc
                title:"添加用户操作界面", //对话框标题
                position:"center",//对话框弹出的位置 top left right center bottom 默认是center
                width:400, //对话框宽度
                height:330, //对话框高度
                resizable:false, //是否可以改变大小操作  默认true
            });

            //触发连接的事件 当点击连接打开一个对话
            $("#dialog_link").click(function (){
                //open参数 作用：打开对话框
                $("#dialog").dialog("open");
            });
        });
    </script>
</head>

<body>
<table id="table2" width="600" border="1" style="background-color:#9F0;" cellpadding="0" cellspacing="0">
    <caption>学生信息</caption>
    <tr style="background-color:#F7B64A">
        <th>姓名</th>
        <th>手机</th>
        <th>职位</th>
    </tr>
</table>
<br />

<a href="#" id="dialog_link"><span></span>添加</a>

<!--div对话框 $("#dialog").dialog();它就成了一个对话框 在页面中就会隐藏-->
<div id="dialog" align="center">
    <br />
    姓名：<input type="text" id="name" name="name" /><br /><br />
    手机：<input type="text" id="phone" name="phone" /><br /><br />
    职位：<input type="text" id="zhiwei" name="zhiwei" /><br /><br />
</div>

</body>
</html>

