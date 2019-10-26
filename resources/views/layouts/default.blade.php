<!DOCTYPE html>
<html>
<head>
    <title>@yield('title', 'Weibo App') - Laravel 入门教程</title>
    <link rel="stylesheet" href="/css/app.css">

    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    {{--上面代码将引入 public/css/app.css 样式文件。--}}

</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="/">Weibo App</a>
        <ul class="navbar-nav justify-content-end">
            <li class="nav-item"><a class="nav-link" href="/help">帮助</a></li>
            <li class="nav-item" ><a class="nav-link" href="#">登录</a></li>
        </ul>
    </div>
</nav>

<div class="container">
    @yield('content')
    {{--插槽--}}
</div>
</body>
</html>