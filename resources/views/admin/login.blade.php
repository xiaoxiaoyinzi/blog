<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="{{asset('/style/css/ch-ui.admin.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('/style/font/css/font-awesome.min.css')}}">
	<script type="text/javascript" src="{{url('/style/js/jquery.js')}}"></script>
</head>
<body style="background:#F3F3F4;">
	<div class="login_box">
		<h1>Gas</h1>
		<h2>欢迎使用智能物联网气体检测管理平台</h2>
		<div class="form">
			@if(session('msg'))
			<p style="color:red">{{session('msg')}}</p>
			@endif
			<form action="#" method="post">
				{{csrf_field()}}
				{{--<input type="hidden" name="_token" value="uPr9Natx3jFnskOa7uIh16qCBWcVZOVNnfUwtY8f">--}}
				<ul id="ff">
					<li>
					<input type="text" name="user_name" class="text" placeholder="用户名/邮箱"/>
						<span><i class="fa fa-user"></i></span>
					</li>
					<li>
						<input type="password" name="user_password" class="text" id="u1"/>
						<span><i class="fa fa-lock"></i></span>
					</li>
					<li>
						<input type="text" class="code" name="code"/>
						<span><i class="fa fa-check-square-o"></i></span>
						<img src="{{url('/admin/code')}}" alt=""onclick="this.src='{{url('/admin/code')}}?'+Math.random()">
					</li>
					<li>
						<input type="submit" value="立即登陆"/>
					</li>
				</ul>
			</form>
			<p><a href="#">返回首页</a> &copy; 2016 Powered by <a href="http://www.jncqj.com" target="_blank">http://www.jncqj.com</a></p>
		</div>
	</div>
</body>
<script language="JavaScript">
//	//绑定事件
//	$('#adduser')click(function () {
//
//		$in_user_name=$('#name').val();
//        $in_user_email=$('#email').val();
//        $in_user_tel=$('#tel').val()
//		//alert($in_user_name" "+$in_user_email" "+$in_user_tel)
//        //一步到位
//        //不能动态绑定删除事件(点击删除，弹出对话框的效果)
//		//$tr=$("<tr><td>"+$in_user_name+"</td><td>"+$in_user_email+"</td><td>"+$in_user_tel+"</td><td><a href='#'>删除<a></td></tr>");
//		//分步走
//        $tr=$("<tr></tr>");
//        $name_td=$("<td></td>");
//        $name_td.text(in_user_name);//"<td>名字</td>"
//        $email_td=$("<td></td>");
//        $email_td.text(in_user_email);//"<td>邮箱</td>"
//        $tel_td=$("<td></td>");
//        $tel_td.text(in_user_tel);//"<td>电话</td>"
//        $a_td=$("<td></td>");
//        $myHref=$("<a/>");
//        $myHref.text("删除");
//        $myHref.attr("href",delEmpController.php?name="+in_user_name);
//		$a_td.append($myHref);
//        $tr.append($name_td);
//        $tr.append($email_td);
//        $tr.append($tel_td);
//        $tr.append($a_td);
//        //超链接还没有绑定点击事件
//		$myHref.click(
//		    function () {
//				//如何显示用户的名字，并且让用户选择是否真的删除
////				alert($(this).parent(),parent().children().eq(0).text());
//				//去数据库删除数据
//				//return window.confirm($(this).parent(),parent().children().eq(0).text());
//               var b= window.confirm($(this).parent(),parent().children().eq(0).text());
//               if (b){
//                   $(this).parent().parent().remove();
//                   return true;
//			   }else{
//                   return false
//			   }
//
//            }
//		)
//
//        $('#usertable tbody').append($tr);
//        //
//
//
//
//    })
</script>
</html>