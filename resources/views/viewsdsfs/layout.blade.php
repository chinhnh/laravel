<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html" />
        <meta name="author" content="lolkittens" />

        <title><?php echo "$title"; ?> @yield('title')</title>
        <link rel="stylesheet" type="text/css" href="{{ asset('public/css/style.css')}}">
    </head>

    <body>
        @yield('content')


        <div>
            @section('header')
            header
            @show

        </div>


        <div>
            @include('views/layout2',['content'=>"trang2"])
        </div>
        <table>
            <tr>
                <th>tên</th>
                <th>tuổi</th>
            </tr>
            <tr>
                <th>a</th>
                <th>34</th>
            </tr>
            <tr>
                <th>b</th>
                <th>534</th>
            </tr>
            <tr>
                <th>ghf</th>
                <th>5345</th>
            </tr>
            <tr>
                <th>cvc</th>
                <th>45764</th>
            </tr>
        </table>
        <div class="van_ban">

            nguyễn hữu chinh hsahjdjsafhjsghfjgsjghf
        </div>

        <?php
        $ten = "<p>nguyen huu chinh</p>";
        ?>

        {{ $ten }}

        {!! $ten !!}


<?php
$diem = 7;
$name = 'chinh';
?>
        @if($diem<5)
        yếu
        @else
        gioi
        @endif
        {{ isset($name) ? $name : "noname" }}
        {{ $name or "noname"}}


    </body>
</html>
<style>

    th{
        color: red;border:1px solid black;
    }


</style>