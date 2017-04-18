@extends('layouts.admin')
    @section('content')
        <body>
        <!--面包屑导航 开始-->
        <div id="realdata">
        <div class="crumb_warp">
            <!--<i class="fa fa-bell"></i> 欢迎使用登陆网站后台，建站的首选工具。-->
            <i class="fa fa-home"></i> <a href={{url('admin/info')}}>首页</a> &raquo;实时数据
        </div>
        <!--面包屑导航 结束-->

        <!--结果页快捷搜索框 开始-->
        <div class="search_wrap">
            <form action="" method="post">
                <table class="search_tab">
                    <tr>
                        <th width="120">选择分类:</th>
                        <td>
                            <select onchange="javascript:location.href=this.value;">
                                <option value="">全部</option>
                                <option value="http://www.baidu.com">一区</option>
                                <option value="http://www.sina.com">二区</option>
                            </select>
                        </td>
                        <th width="70">关键字:</th>
                        <td><input type="text" name="keywords" placeholder="关键字"></td>
                        <td><input type="submit" name="sub" value="查询"></td>
                    </tr>
                </table>
            </form>
        </div>
        <!--结果页快捷搜索框 结束-->

        <!--搜索结果页面 列表 开始-->
        <div id="realdata">
        <form action="#" method="post">
            <div class="result_wrap">
                <!--快捷导航 开始-->
                <div class="result_content">
                    <div class="short_wrap">
                        <a href="{{url('admin/real/create')}}"><i class="fa fa-plus"></i>新增设备</a>
                        <a href="#"><i class="fa fa-recycle"></i>批量删除</a>
                        <a href="{{url('admin/real')}}"><i class="fa fa-refresh"></i>更新</a>
                    </div>
                </div>
                <!--快捷导航 结束-->
            </div>


            <div class="result_wrap">
                <div class="result_content">
                    <table class="list_tab">
                        <tr>
                            {{--<th class="tc" width="5%">--}}
                                {{--<input type="checkbox" name=""></th>--}}
                            <th class="tc">排序</th>
                            <th class="tc">ID</th>
                            <th>安装地址</th>
                            <th>气体浓度</th>
                            <th>传感器状态</th>
                            <th>水位状态</th>
                            <th>电池状态</th>
                            <th>上传时间</th>
                            <th>操作</th>
                        </tr>
                        @foreach($data as $v)
                        <tr id="list">
                            {{--<td class="tc"><input type="checkbox" name="id[]" value="59"></td>--}}
                            <td class="tc" >
                                {{--在表单中加入onchange事件，值改变时发送，参数传递input里面的对象用this--}}
                                <input type="text" onchange="changeOrder(this,{{$v->id}})" value="{{$v->real_order}}">
                            </td>
                            <td class="tc">{{$v->id}}</td>
                            <td>
                                <a href="{{url('admin/map/'.$v->id.'/view')}}">{{$v->category}}</a>
                            </td>
                            <td {{$v->gass_chroma>0.35 ? 'bgcolor=#F75D59':'default'}}>{{$v->gass_chroma}}</td>
                            <td>{{$v->sensor_status}}</td>
                            <td {{$v->waterline_status=="报警"? 'bgcolor=#F75D59':'default'}}>{{$v->waterline_status}}</td>
                            <td {{$v->battery_status=="不足"? 'bgcolor=#F75D59':'default'}}>{{$v->battery_status}}</td>
                            <td>{{$v->post_date}}</td>
                            <td>
                                <a href="{{url('admin/real/'.$v->id.'/edit')}}">修改</a>
                                <a href="javascript:;" onclick="delequip({{$v->id}})" >删除</a>
                            </td>
                        </tr>
                        @endforeach


                    </table>


                    {{--<div class="page_nav">--}}
                        {{--<div>--}}
                            {{--<a class="first" href="/wysls/index.php/Admin/Tag/index/p/1.html">第一页</a>--}}
                            {{--<a class="prev" href="/wysls/index.php/Admin/Tag/index/p/7.html">上一页</a>--}}
                            {{--<a class="num" href="/wysls/index.php/Admin/Tag/index/p/6.html">6</a>--}}
                            {{--<a class="num" href="/wysls/index.php/Admin/Tag/index/p/7.html">7</a>--}}
                            {{--<span class="current">8</span>--}}
                            {{--<a class="num" href="/wysls/index.php/Admin/Tag/index/p/9.html">9</a>--}}
                            {{--<a class="num" href="/wysls/index.php/Admin/Tag/index/p/10.html">10</a>--}}
                            {{--<a class="next" href="/wysls/index.php/Admin/Tag/index/p/9.html">下一页</a>--}}
                            {{--<a class="end" href="/wysls/index.php/Admin/Tag/index/p/11.html">最后一页</a>--}}
                            {{--<span class="rows">11 条记录</span>--}}
                        {{--</div>--}}
                    {{--</div>--}}



                    <div class="page_list">
                        {{--<ul>--}}
                            {{--<li class="disabled"><a href="#">&laquo;</a></li>--}}
                            {{--<li class="active"><a href="#">1</a></li>--}}
                            {{--<li><a href="#">2</a></li>--}}
                            {{--<li><a href="#">3</a></li>--}}
                            {{--<li><a href="#">4</a></li>--}}
                            {{--<li><a href="#">5</a></li>--}}
                            {{--<li><a href="#">&raquo;</a></li>--}}
                        {{--</ul>--}}
                        {{$data->links()}}
                    </div>
                </div>
            </div>

        </form>
            <style>
                .result_content ul li span {
                    font-size: 15px;
                    padding:6px 12px;
                }
            </style>
        </div>
        <!--搜索结果页面 列表 结束-->
        <script>
            function changeOrder (obj,id) {
//  alert('不要变')
//                定义变量，传入obj的值
                var real_order=$(obj).val();
                $.post("{{url('admin/real/changeorder')}}",
                        {'_token':'{{csrf_token()}}','id':id,'real_order':real_order},
//                        将data值传递给回调函数
                        function (data) {
                    if(data.status==0){

                        layer.msg(data.msg, {icon: 6});
                        setInterval(function () {
                            $('#realdata').load("{{url('admin/real')}}");}, 5000);
                    }

                    else{
                        layer.msg(data.msg, {icon: 5});
                    }
//                    alert(data.msg);
                }
                )
            }
            window.onload = function() {
                setInterval(function () {
                    $('#realdata').load("{{url('admin/real')}}");}, 10000);//这个是jquery代码
            };
            //            $(function() {
//
//                // 任何需要执行的js特效
//                $("table tr:nth-child(even)").addClass("even");
//            });


        //删除设备
            function delequip(id) {
                //询问框
                layer.confirm('这个设备或许很重要，那么，真的要删除了么？', {
                    btn: ['删了','慢着'] //按钮
                }, function(){
                    $.post("{{url('admin/real/')}}/"+id,{'_method':'delete','_token':"{{csrf_token()}}"},function(data){
                        if(data.status==0){
                            location.href = location.href;
                            layer.msg(data.msg, {icon: 6});
                        }else{
                            layer.msg(data.msg, {icon: 5});
                        }
                    });
//                    alert(id);
//                    layer.msg('的确很重要', {icon: 1});
                }, function(){
                    layer.msg('好的...不删了...', {
                        time: 2000, //20s后自动关闭
//                        btn: ['明白了', '知道了']
                    });
                });
            }

        </script>

        @endsection
