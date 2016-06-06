<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <title>用户的注册和登录</title>
    <!-- 新 Bootstrap 核心 CSS 文件 -->
    <link rel="stylesheet" href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css"type='text/css' media='all'>
    <link rel='stylesheet' href="/css/all.css" type='text/css' media='all'/>
    <!-- 可选的Bootstrap主题文件（一般不用引入） -->
    <link rel="stylesheet" href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

    <!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
    <script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>

    <!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
    <script src="//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

</head>
<body style="background-image: url('/public/2.jpg')">


    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand hidden-sm" href="/" >江苏理工学院图书馆</a>
        </div>
        <ul class="nav navbar-nav navbar-right hidden-sm">

            <a href="/auth/register" class="btn btn-primary btn-lg active" role="button">注册</a>
            <a href="/auth/login" class="btn btn-primary btn-lg active" role="button">登录</a>
        </ul>
    </div>
    @yield('content')

</body>
</html>