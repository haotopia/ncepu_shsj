<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
<!--     <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests"> -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>社会实践查询系统</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}">
</head>
<body>
        <img src="{{ asset('img/back.png') }}" class="back_img">
        <img src="{{ asset('img/search.png') }}" class="front_img">
        <div class="content">
            <form role="form" action="{{ route('users.check') }} " method="POST">
                {{ csrf_field() }}
              <div class="form-group">
                <input type="number" class="form-control" name="stu_id" placeholder="请输入学号">
                <br>
                <input type="password" class="form-control" name="password" placeholder="请输入密码">
                <br>
                @include('common.error')
                <button class="btn btn-success btn-lg" type="submit">登录</button>
                <button class="btn btn-default btn-lg" type="button">注册</button>
              </div>
            </form>
        </div>

</body>
</html>