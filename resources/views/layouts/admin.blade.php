<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    {{--<link rel="stylesheet" href="style/css/ch-ui.admin.css">--}}
    {{--<link rel="stylesheet" href="style/font/css/font-awesome.min.css">--}}
    <link rel="stylesheet" type="text/css" href="{{asset('/style/css/ch-ui.admin.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/style/css/twitter.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/style/font/css/font-awesome.min.css')}}">
    {{--asset()方法用于引入css/js/img等文件，文件必须放在public文件目录下，url()方法用来生成一个网址。--}}
    <script type="text/javascript" src="{{url('/style/js/jquery.js')}}"></script>
    <script type="text/javascript" src="{{url('/style/js/ch-ui.admin.js')}}"></script>
    <script type="text/javascript" src="{{url('/style/layer/layer.js')}}"></script>


</head>
<body>

@yield('content')

</body>
</html>