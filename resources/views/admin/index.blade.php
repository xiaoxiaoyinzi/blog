<!DOCTYPE html>
@extends('layouts.admin')
	@section('content')
<!--头部 开始-->
	<div class="top_box">
		<div class="top_left">
			<div class="logo">后台管理</div>
			<ul>
				<li><a href="#" class="active">首页</a></li>
				<li><a href="{{url('admin/map/view')}}">地图</a></li>
			</ul>
		</div>
		<div class="top_right">
			<ul>
				<li>身份：{{session('user.user_name')}}</li>
				<li><a href="{{url('admin/pass')}}" target="main"accesskey="p">修改密码</a></li>
				<li><a href="{{url('admin/quit')}}"accesskey="q">退出</a></li>
			</ul>
		</div>
	</div>
	<!--头部 结束-->

	<!--左侧导航 开始-->
	<div class="menu_box">
		<ul>
			<li>
				<h3><i class="fa fa-fw fa-clipboard"></i>常用操作</h3>
				<ul class="sub_menu">
					<li><a href="{{url('admin/real')}}" target="main"><i class="fa fa-fw fa-plus-square"></i>实时数据</a></li>
					<li><a href="{{url('admin/map/view')}}" target="main"><i class="fa fa-fw fa-list-ul"></i>地图数据</a></li>
					<li><a href="{{url('admin/alert')}}" target="main"><i class="fa fa-fw fa-list-alt"></i>报警数据</a></li>
					<li><a href="{{url('admin/count')}}" target="main"><i class="fa fa-fw fa-image"></i>数据统计</a></li>
					<li><a href="{{url('admin/maintain')}}" target="main"><i class="fa fa-fw fa-image"></i>设备维保</a></li>
				</ul>
			</li>
			<li>
				<h3><i class="fa fa-fw fa-cog"></i>系统设置</h3>
				<ul class="sub_menu">
					<li><a href="{{url('admin/sys_conf')}}" target="main"><i class="fa fa-fw fa-cubes"></i>网站配置</a></li>
					<li><a href="{{url('admin/role_conf')}}" target="main"><i class="fa fa-fw fa-database"></i>备份还原</a></li>
				</ul>
			</li>
			<li>
				<h3><i class="fa fa-fw fa-thumb-tack"></i>工具导航</h3>
				<ul class="sub_menu">
					<li><a href="http://www.yeahzan.com/fa/facss.html" target="main"><i class="fa fa-fw fa-font"></i>图标调用</a></li>
					<li><a href="http://hemin.cn/jq/cheatsheet.html" target="main"><i class="fa fa-fw fa-chain"></i>Jquery手册</a></li>
					<li><a href="http://tool.c7sky.com/webcolor/" target="main"><i class="fa fa-fw fa-tachometer"></i>配色板</a></li>
					<li><a href="{{url('admin/element')}}" target="main"><i class="fa fa-fw fa-tags"></i>其他组件</a></li>
				</ul>
			</li>
		</ul>
	</div>
	<!--左侧导航 结束-->
	<!--主体部分 开始-->
	<div class="main_box">
		<iframe src="{{url('admin/info')}}" frameborder="0" width="100%" height="100%" name="main"></iframe>
	</div>
	<!--主体部分 结束-->


	<!--底部 开始-->
<a id="tub" class="toTop" href="javascript:;" onclick="tips_pop()" style="display: inline;"></a>


	<div class="bottom_box" >
{{--<div class="toTop,bottom_box" >--}}
		CopyRight © 2016. Powered By <a href="http://www.jncqj.com">http:www.jncqj.com</a>
		{{--<button   style="position:absolute;right:105px" onclick="tips_pop()">点我弹窗</button>--}}
	</div>
<script type="text/javascript">
	function tips_pop () {
//	    alert('ok');
        layer.open({
            type: 2,
            title: '报警信息',
            area: ['700px', '530px'],
            offset: 'rb',
            fixed: false, //不固定
            maxmin: true,
            content: '{{url('admin/info')}}'
        });

    }

</script>

	<!--底部 结束-->

@endsection




