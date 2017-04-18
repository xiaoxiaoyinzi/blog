@extends('layouts.admin')
@section('content')
    <!--面包屑导航 开始-->
    <div class="crumb_warp">
        <!--<i class="fa fa-bell"></i> 欢迎使用登陆网站后台，建站的首选工具。-->
        <i class="fa fa-home"></i> <a href="{{url('admin/info')}}">首页</a> &raquo; 设备管理
    </div>
    <!--面包屑导航 结束-->

    <!--结果集标题与导航组件 开始-->
    <div class="result_wrap">
        <div class="result_title">
            <h3>设备管理</h3>
            @if(count($errors)>0)
                <div class="mark">
                    @if(is_object($errors))
                    @foreach($errors->all() as $error)
                        <p>{{$error}}</p>
                    @endforeach
                    @else
                        <p>{{$errors}}</p>
                    @endif
                </div>
            @endif
        </div>
        {{--<div class="result_content">--}}
            {{--<div class="short_wrap">--}}
                {{--<a href="#"><i class="fa fa-plus"></i>新增设备</a>--}}
                {{--<a href="#"><i class="fa fa-recycle"></i>批量删除</a>--}}
                {{--<a href="#"><i class="fa fa-refresh"></i>更新排序</a>--}}
            {{--</div>--}}
        {{--</div>--}}
    </div>
    <!--结果集标题与导航组件 结束-->

    <div class="result_wrap">
        <form action="{{url('admin/real/'.$field->id)}}" method="post">
           <input type="hidden" name="_method" value="put">
            {{csrf_field()}}
            <table class="add_tab">
                <tbody>
                <tr>
                    {{--必填标识符<i class="require">*</i>--}}
                    <th width="120"><i class="require">*</i>片区：</th>
                    <td>
                        <select name="area">
                            <option value="{{$field->area}}">{{$field->area}}</option>

                            <option value="A区">A区</option>
                            <option value="B区">B区</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <th><i class="require">*</i>设备编号：</th>
                    <td>
                        <input type="text" size="20" name="equip_number" value="{{$field->equip_number}}">
                        <p>编号可以写11位数字</p>
                    </td>
                </tr>
                <tr>
                    <th><i class="require">*</i>经度：</th>
                    <td>
                        <input type="text" name="longitude" value="{{$field->longitude}}">
                        <span><i class="fa fa-exclamation-circle yellow"></i>保留小数点后六位</span>
                    </td>
                </tr>
                <tr>
                    <th><i class="require">*</i>纬度：</th>
                    <td>
                        <input type="text" name="latitude" value="{{$field->latitude}}">
                        <span><i class="fa fa-exclamation-circle yellow"></i>保留小数点后六位</span>
                    </td>
                </tr>
                <tr>
                    <th><i class="require">*</i>安装地址：</th>
                    <td>
                        <input type="text" size="40" name="install_address" value="{{$field->install_address}}">
                        <span><i class="fa fa-exclamation-circle yellow"></i>请不要超过二十个字哦</span>
                    </td>
                </tr>
                <tr>
                    <th>缩略图：</th>
                    <td><input type="file" name=""></td>
                </tr>
                <tr>
                    <th><i class="require">*</i>产品类型：</th>
                    <td>
                        <label for="RB-TW"><input type="radio" name="category" value="RB-TW" id="RB-TW">RB-TW</label>
                        <label for="RB-DJ3"><input type="radio" name="category" value="RB-DJ3" id="RB-DJ3">RB-DJ3</label>
                        <label for="RB-GTU"><input type="radio" name="category" value="RB-GTU" id="RB-GTU">RB-GTU</label>
                    </td>
                </tr>
                {{--<tr>--}}
                    {{--<th>复选框：</th>--}}
                    {{--<td>--}}
                        {{--<label for=""><input type="checkbox" name="">复选框一</label>--}}
                        {{--<label for=""><input type="checkbox" name="">复选框二</label>--}}
                    {{--</td>--}}
                {{--</tr>--}}
                {{--<tr>--}}
                    {{--<th>描述：</th>--}}
                    {{--<td>--}}
                        {{--<textarea name="discription"></textarea>--}}
                    {{--</td>--}}
                {{--</tr>--}}
                {{--<tr>--}}
                    {{--<th>详细内容：</th>--}}
                    {{--<td>--}}
                        {{--<textarea class="lg" name="content"></textarea>--}}
                        {{--<p>标题可以写30个字</p>--}}
                    {{--</td>--}}
                {{--</tr>--}}
                <tr>
                    <th></th>
                    <td>
                        <input type="submit" value="提交">
                        <input type="button" class="back" onclick="history.go(-1)" value="返回">
                    </td>
                </tr>
                </tbody>
            </table>
        </form>
    </div>
    @endsection


