<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>@yield('title','shsj') - 社会实践查询系统</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}">
</head>
<body>
        <img src="{{ asset('img/back.png') }}" class="back_img">
        <img src="{{ asset('img/search.png') }}" class="front_img">
        <div class="content">
            <form role="form">
              <div class="form-group">
                <input type="number" class="form-control" placeholder="请输入学号">
                <br>
                <input type="password" class="form-control" placeholder="请输入密码">
                <br>
                <button class="btn btn-success btn-lg" type="button">登录</button>
                <button class="btn btn-default btn-lg" type="button">注册</button>

              </div>
            </form>
        </div>

</body>
</html>