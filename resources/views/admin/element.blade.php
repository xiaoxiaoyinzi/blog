<!DOCTYPE html>
@extends('layouts.admin')
@section('content')
<!--面包屑导航 开始-->
<div class="crumb_warp">
    <!--<i class="fa fa-bell"></i> 欢迎使用登陆网站后台，建站的首选工具。-->
    <i class="fa fa-home"></i> <a href="{{url('admin/info')}}">首页</a> &raquo; {{--<a --}}{{--href="#"--}}>工具导航{{--</a>--}} &raquo; 其他组件
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
    <table class="add_tab">
        <tr>
            <th width="120">EsayDialog</th>
            <td>
                <a href="http://www.h-ui.net/easydialog-v2.0/index.html" target="_blank">
                    http://www.h-ui.net/easydialog-v2.0/index.html
                </a>
            </td>
        </tr>
        <tr>
            <th width="120">ArtDialog</th>
            <td>
                <a href="http://demo.jb51.net/js/2011/artDialog/_doc/labs.html" target="_blank">
                    http://demo.jb51.net/js/2011/artDialog/_doc/labs.html
                </a>
            </td>
        </tr>
        <tr>
            <th width="120">SuperSlide</th>
            <td>
                <a href="http://www.h-ui.net/easydialog-v2.0/index.html" target="_blank">
                    http://www.superslide2.com/
                </a>
            </td>
        </tr>
        <tr>
            <th width="120">表单验证</th>
            <td>
                <a href="http://validform.rjboy.cn/document.html" target="_blank">
                    http://validform.rjboy.cn/document.html
                </a>
            </td>
        </tr>
        <tr>
            <th width="120">日历插件</th>
            <td>
                <a href="http://laydate.layui.com/" target="_blank">
                    http://laydate.layui.com/
                </a>
            </td>
        </tr>
    </table>
</div>
@endsection

