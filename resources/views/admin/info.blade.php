@extends('layouts.admin')
@section('content')
    <!--面包屑导航 开始-->
    <div class="crumb_warp">
        <!--<i class="fa fa-bell"></i> 欢迎使用登陆网站后台，建站的首选工具。-->
        {{--<i class="fa fa-home"></i> <a href="admin/index">首页</a> &raquo; <a href="#">商品管理</a> &raquo; 添加商品--}}
        <i class="fa fa-home"></i> <a href="{{url('admin/info')}}">首页</a> &raquo; 系统基本信息
    </div>
    <!--面包屑导航 结束-->

    <!--结果集标题与导航组件 开始-->
    <div class="result_wrap">
        <div class="result_title">
            <h3>快捷操作</h3>
        </div>
        <div class="result_content">
            <div class="short_wrap">
                <a href="{{url('admin/real')}}"><i class="fa-table"></i>实时数据</a>
                <a href="{{url('admin/real/create')}}"><i class="fa fa-recycle"></i>添加设备</a>
                <a href="{{url('admin/pass')}}"><i class="fa fa-refresh"></i>修改密码</a>
            </div>
        </div>
    </div>
    <!--结果集标题与导航组件 结束-->


    <div class="result_wrap">
        <div class="result_title">
            <h3>系统基本信息</h3>
        </div>
        <div class="result_content">
            <ul>
                <li>
                    <label>操作系统</label><span>{{PHP_OS}}</span>
                </li>
                <li>
                    <label>运行环境</label><span>{{$_SERVER['SERVER_SOFTWARE']}}</span>
                </li>
                <li>
                    <label>PHP运行方式</label><span>apache2handler</span>
                </li>
                <li>
                    <label>设计-版本</label><span>v-0.1</span>
                </li>
                <li>
                    <label>上传附件限制</label><span><?php
                        echo get_cfg_var ("upload_max_filesize")?get_cfg_var ("upload_max_filesize"):"不允许上传附件";
                        ?>
</span>
                </li>
                <li>
                    <label>北京时间</label><span>{{date("Y-m-d H:i:s")}}
</span>
                </li>
                <li>
                    <label>服务器域名/IP</label><span>{{$_SERVER['SERVER_NAME']}} [  {{$_SERVER['REMOTE_ADDR']}}]</span>
                </li>
                <li>
                    <label>Host</label><span>127.0.0.1</span>
                </li>
            </ul>
        </div>
    </div>


    <div class="result_wrap">
        <div class="result_title">
            <h3>使用帮助</h3>
        </div>
        <div class="result_content">
            <ul>
                <li>
                    <label>官方网址：</label><span><a href="//www.jncqj.com">www.jncqj.com</a></span>
                </li>
                <li>
                    {{--<label>官方交流QQ群：</label><span><a href="#"><img border="0" src="http://pub.idqqimg.com/wpa/images/group.png"></a></span>--}}
                    <label>联系方式：</label><span>1265477411@qq.com</span>&nbsp;<span><a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=1265477411&site=qq&menu=yes" ><img border="0" src="http://wpa.qq.com/pa?p=2:1265477411:51" alt="加我加我" title="加我加我"/></a></span>
                </li>
                <li>
                    {{--<label>我的QQ：</label><span><a href="http://sighttp.qq.com/msgrd?v=3&uin=206574042&site=&menu=yes">点我聊天--}}
                           {{--// <img border="0" src="http://pub.idqqimg.com/wpa/images/group.png">--}}

                        {{--</a></span>--}}
                    {{--<a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=1265477411&site=qq&menu=yes"><img border="0" src="http://wpa.qq.com/pa?p=2:1265477411:51" alt="加我加我" title="加我加我"/></a>--}}
                    {{--<label><a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=206574042&site=qq&menu=yes"><img border="0" src="http://wpa.qq.com/pa?p=2:515807823:51" alt="点击这里给我发消息" title="点击这里给我发消息"/></a></label>--}}
                </li>

            </ul>
        </div>
    </div>
    <!--结果集列表组件 结束-->
@endsection
