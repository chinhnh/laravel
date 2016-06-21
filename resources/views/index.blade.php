
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Quản lý nhân viên</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <!-- BOOTSTRAP STYLES-->
        <link href="{{ asset('public/assets/css/bootstrap.css')}}" rel="stylesheet" />
        <!-- FONTAWESOME ICONS STYLES-->
        <link href="{{ asset('public/assets/css/font-awesome.css')}}" rel="stylesheet" />
        <!--CUSTOM STYLES-->
        <link href="{{asset('public/assets/css/style.css')}}" rel="stylesheet" />

    </head>

    <body >



        <div id="wrapper">
            <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a  class="navbar-brand" href="index.html">Trang quản trị</a>
                </div>

                <div class="notifications-wrapper">
                    <ul class="nav">

                        <li class="pull-right"> 
                            <a href="{{ asset('auth/logout') }}">Logout</a>
                        </li>

                    </ul>



                </div>
            </nav>
            <!-- /. NAV TOP  -->
            <nav  class="navbar-default navbar-side" role="navigation">
                <div class="sidebar-collapse">
                    <ul class="nav" id="main-menu">
                        <li>
                            <div class="user-img-div">
                                <img src="{{ asset('public/assets/img/user.jpg') }}" class="img-circle" width="120px" />
                                 

                            </div>
                               
                        </li>
                        <li>
                            <a  href="#"> <strong>  {{ Auth::user()->name }}</strong></a>
                        </li>

                        <li>
                            <a class="active-menu"  href="#"><i class="fa fa-dashboard "></i>Bảng điều khiển</a>
                        </li>




                    </ul>
                </div>

            </nav> 

            <!-- /. SIDEBAR MENU (navbar-side) -->
            <div id="page-wrapper" class="page-wrapper-cls">
                <div id="page-inner">


                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="page-head-line" style="font-family:time new roman;">Bảng điều khiển</h1>
                        </div>
                    </div> 
                    <div class="col-md-12 ">
                        <div id="header">
                            <nav class="navbar navbar-inverse navbar-static-top">
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu2">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>

                                </div>

                                <div class="navbar-collapse collapse" id="menu2">
                                    <ul class="nav navbar-nav">
                                        <li><a href="{{ asset('nhansu')}}">Danh sách nhân viên</a></li>               
                                        <li><a href="{{ asset('createNhansu')}}">Thêm mới nhân viên</a></li>
                                        <li><a href="{{ asset('phongban')}}">Danh sách phòng ban</a></li>
                                        <li><a href="{{ asset('chucvu')}}">Thông tin chức vụ</a></li>



                                    </ul> </div>   


                        </div>
                        </nav>

                    </div><br />




                    <!--------------------------------------------------------------------------------------------------------------------> 		
                            <div class="col-md-12" style="margin-bottom: 20px;">                                                
                                <form class="form-inline" method="post" action="{{asset('search')}}">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <input type="text" class="form-control" placeholder="nhập tên" name="name"  size="50px"/>          
                                    <input type="submit" class="btn btn-primary" name="click" value="Tìm"/>
                                </form>
                            </div><br />


                            <!--------------------------------------------------------------------------------------------------------------------> 
                            <div class="col-md-12" >
                             <div style=" overflow: auto;">

                                <table class="table table-striped table-bordered table-responsive">

                                    <tr style="background-color: #2c3e50;">
                                        <th rowspan="2"></th>
                                        <th rowspan="2">MÃ NV</th>
                                        <th rowspan="2">HỌ VÀ TÊN</th>
                                        <th rowspan="2">GIỚI TÍNH</th>
                                        <th rowspan="2">NGÀY SINH</th>
                                        <th rowspan="2">ĐIỆN THOẠI</th>
                                        <th rowspan="2">QUÊ QUÁN</th>
                                        <th rowspan="2">EMAIL</th> 
                                        <th rowspan="2"></th>
                                        <th colspan="2" > THÔNG TIN</th> 
                                    </tr>
                                    <tr style="background-color: #2c3e70;">
                                        <th >Nhân viên</th>
                                        <th >Công việc</th>    
                                    </tr>
                                    <tbody>
                                        <?php
                                        $data = DB::table('tbl_nhanvien')->where('nghi_viec', 0)->get();
                                        foreach ($data as $key => $value) {
                                            ?>

                                            <tr>
                                                <td><img style="width:50px; height:50px;" src="{{ asset('resources/upload')}}/{{ $value->images }}"></td>
                                                
                                                <td>{{ $value->ma_nhan_vien}}</td>
                                                <td>{{ $value->ho_ten}}</td>
                                                <?php $gt = $value->gioi_tinh; ?>
                                                @if($gt==1)
                                                <td>Nam</td>
                                                @else
                                                <td>Nữ</td>
                                                @endif


                                                <td>{{ $value->ngay_sinh}}</td>
                                                <td>{{ $value->dien_thoai}}</td>
                                                <td>{{ $value->dia_chi}}</td>
                                                <td>{{ $value->email}}</td>
                                                <td><a href="{{ asset('/delete/')}}/{{ $value->ma_nhan_vien }}"><i class="fa fa-remove fa-2x"></i></a></td>
                                                <td><a href="./show/thong-tin/{{ $value->ma_nhan_vien }}"><i class="fa fa-check fa-2x"></i></a></td>
                                                <td><a href="./show/cong-viec/{{ $value->ma_nhan_vien }}"><i class="fa fa-check fa-2x"></i></a></td>


                                            </tr>

                                        <?php } ?>
                                    </tbody>

                                </table>




                            </div> </div>



                        </div>
                    </div>
                </div>

                <!-- /. PAGE INNER  -->

               
                <!-- /. FOOTER  -->

                <script src="{{ asset('public/assets/js/jquery-1.11.1.js')}}"></script>
                <!-- BOOTSTRAP SCRIPTS -->
                <script src="{{ asset('public/assets/js/bootstrap.js')}}"></script>
                <!-- METISMENU SCRIPTS -->
                <script src="{{ asset('public/assets/js/jquery.metisMenu.js')}}"></script>
                <!-- CUSTOM SCRIPTS -->
                <script src="{{ asset('public/assets/js/custom.js')}}"></script>
                </body>
            </div>
            </html>


            <style>td{text-align: center;}</style>


