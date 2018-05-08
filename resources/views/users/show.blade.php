<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
<!--     <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests"> -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>查询结果</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}">
</head>
<body>
        <img src="{{ asset('img/detial_back.png')}}" class="back_img">
        <div class="wrap">
        <div class="result">
            <div class="result_font">
                <span class="info">姓名:<span>{{$students->stu_name}}</span></span>
                <span class="info">班级:<span>{{$students->stu_class}}</span></span>
                <span class="info">学号:<span>{{$user->stu_id}}</span></span>
                <span class="info">总分:<span>99</span></span>
                <div class="">
                    <ul class="list-unstyled" role="menu">
                        <li class="">
                            <a class="btn btn-default btn-sm" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                退出登录
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        </div>

        <div class="table-responsive box">
        <table class="table table-bordered tableBox">
           <thead>
             <tr>
               <th>实践时间</th>
               <th>实践名称</th>
               <th>学分</th>
             </tr>
           </thead>
           <tbody>
            @if (count($prictices) >0)
                @foreach ($prictices as $pri)
             <tr>
               <td>{{date("Y",strtotime($pri->created_time))}}年{{date("m",strtotime($pri->created_time))}}月</td>
               <td>{{$pri->sp_name}}</td>
               <td>5</td>
             </tr>
                @endforeach
            @endif
           </tbody>
        </table>
    </div>

</body>
</html>