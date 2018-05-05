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
                <span class="info">姓名:<span>{{$user->name}}</span></span>
                <span class="info">班级:<span>网络1601</span></span>
                <span class="info">学号:<span>{{$user->stu_id}}</span></span>
                <span class="info">总分:<span>99</span></span>
            </div>
        </div>
        </div>
        <div class="table-responsive box">
        <table class="table table-bordered tableBox">
           <thead>
             <tr>
               <th>学年假期</th>
               <th>表格标题</th>
               <th>学分</th>
             </tr>
           </thead>
           <tbody>
             <tr>
               <td>2016-2017暑假</td>
               <td>表格单元格表格单元格</td>
               <td>5</td>
             </tr>
             <tr>
               <td>2016-2017暑假</td>
               <td>表格单元格</td>
               <td>6</td>
             </tr>
             <tr>
               <td>2016-2017暑假</td>
               <td>表格单元格</td>
               <td>7</td>
             </tr>
             <tr>
               <td>2016-2017暑假</td>
               <td>表格单元格</td>
               <td>2.2</td>
             </tr>
             <tr>
               <td>2016-2017暑假</td>
               <td>表格单元格</td>
               <td>2.2</td>
             </tr>
             <tr>
               <td>2016-2017暑假</td>
               <td>表格单元格</td>
               <td>2.2</td>
             </tr>
             <tr>
               <td>2016-2017暑假</td>
               <td>表格单元格</td>
               <td>2.2</td>
             </tr>
             <tr>
               <td>2016-2017暑假</td>
               <td>表格单元格</td>
               <td>2.2</td>
             </tr>
           </tbody>
        </table>
    </div>


</body>
</html>