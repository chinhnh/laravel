
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
                            <a  href="index.php"> <strong> </strong></a>
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
                                        <li><a href="{{ asset('dangnhap') }}">Thêm thí sinh</a></li>
                                        <li><a href="{{ asset('dangnhap') }}">fsdf</a></li>   
                                        <li><a href="index.php/home/thisinh/diem-thi">Thông tin điểm thi</a></li>
                                        <li><a href="index.php/home/thisinh/khoi-thi">Khối thi</a></li>
                                        <li><a href="index.php/home/thisinh/khu-vuc">Khu vực</a></li>
                                        <li><a href="index.php/home/thisinh/phong-thi">Phòng thi</a></li>
                                        <li><a href="index.php/home/thisinh/ton-giao">Tôn giáo</a></li>
                                        <li><a href="index.php/home/thisinh/dan-toc">Dân tộc</a></li>


                                    </ul> </div>   


                        </div>
                        </nav>

                    </div><br />




                    <div class="col-md-12" style="margin-bottom: 20px; text-align: center;">
                        <form class="form-inline" action="/thisinh/search/phong" method="post">
                            <select class="form-control" name="phong">

                                <option value="ffsdf">aaaaaaa</option>
                                <option value="ffsdf">aaaaaaa</option>
                                <option value="ffsdf">aaaaaaa</option>
                                <option value="ffsdf">aaaaaaa</option>

                            </select>        
                            <input class="btn btn-success" type="submit" name="click" value="Lọc phòng thi"/>
                        </form>
                        <br />

                        <form class="form-inline" method="post" action="/thisinh/search/ten">
                            <input type="text" class="form-control" placeholder="nhập tên" name="ten"  size="50px"/>          
                            <input type="submit" class="btn btn-danger" name="click" value="Tìm"/>
                        </form>

                    </div><br /><br />



                    <!-------------------------------------------------------------------------------------------------------------------->   
                </div>
            </div>
        </div>

        <!-- /. PAGE INNER  -->

        <footer>
        </footer>
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


