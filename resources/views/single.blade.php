
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
         <script src="{{ asset('public/assets/js/jquery-1.11.1.js')}}"></script>
         <script src="http://code.jquery.com/jquery-latest.js"></script>
     <script type="text/javascript">
   $(function(){
    $('#bt_thongtin').click(function(){
        $('#thong_tin').toggle(10);
    });
});

 $(function(){
    $('#bt_congviec').click(function(){
        $('#cong_viec').toggle(10);
    });
});



     </script>
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

                    <div class="col-md-12 " style="text-align: center; margin-top: 20px;">
                        <?php if (isset($phong_search)) { ?>
                            <div  class="panel panel-success"><div class="panel-heading"><i class="fa fa-home fa-2x"></i> Tìm kiếm theo phòng( <?php echo $phong_search[0]['ten_phong_ban']; ?> )</div>
                            <?php } else if (isset($ten)) { ?>
                                <div  class="panel panel-success"><div class="panel-heading"><i class="fa fa-home fa-2x"></i> Tìm kiếm tên ( <?php echo $ten; ?> )</div>
                                <?php } else { ?>
                                    <div  class="panel panel-success"><div class="panel-heading"><i class="fa fa-home fa-2x"></i> Danh sách nhân viên</div>
                                    <?php } ?>
                                </div>
                            </div> 



<div class="col-md-12">
 @if (count($errors) > 0)
                    <div class="alert alert-warning">
                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
</div>

                            <div class="col-md-12" style="margin-bottom: 20px;">
                          

                                <form class="form-inline" method="post" action="{{asset('search')}}">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <input type="text" class="form-control" placeholder="nhập tên" name="name"  size="50px"/>          
                                    <input type="submit" class="btn btn-primary" name="click" value="Tìm"/>
                                </form>

                            </div><br />


                            <!--------------------------------------------------------------------------------------------------------------------> 

                            <div class="col-md-12" >


                                <table class="table table-striped table-bordered table-responsive">

                                    <tr style="background-color: #2c3e50;">
                                        <th></th> 
                                        <th >MÃ NV</th>
                                        <th >HỌ VÀ TÊN</th>
                                        <th >GIỚI TÍNH</th>
                                        <th >NGÀY SINH</th>
                                        <th >ĐIỆN THOẠI</th>
                                        <th >QUÊ QUÁN</th>
                                        <th >EMAIL</th>
                                        
                                        <th ></th>
                                        <th></th>
                                       


                                    </tr>
                                    <tbody>
                                        <?php
                                        $data = DB::table('tbl_nhanvien')->where('ma_nhan_vien', $id)->get();
                                        foreach ($data as $key => $value) {
                                            ?>

                                            <tr>
                                                <td><img style="width:50px; height:50px;" src="{{ asset('resources/upload')}}/{{ $value->images }}"></td>
                                                
                                                <td>{{ $value->ma_nhan_vien}}</td>
                                                <td style="width=150px;">{{ $value->ho_ten}}</td>
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
                                                <td><a href="{{ asset('delete')}}/{{ $value->ma_nhan_vien }}"><i class="fa fa-close fa-2x"></i></a></td>
                                                 <td><button id="bt_thongtin" class="btn btn-success">Update</button></td>
                                            </tr>

                                        <?php } ?>
                                    </tbody>

                                </table>




                            </div>  

                            <!---->

                            <div class="col-md-12" style="text-align: center;">
                                <div class="row" >

                                    <div class="col-md-4"><div class="panel panel-danger" >         
                                            <div  class=" panel-heading" ><i class="fa fa-calendar fa-2x"></i><a href="{{ asset('show/cong-viec')}}/{!! $id !!}"> Thông tin công việc</a></div>
                                        </div></div>


                                </div>   
                            </div>

                            <!------>
                            
                                <div id="thong_tin">
                                <!--****************************************************************************************************************-->
                                @include('cap_nhat_thong_tin_nhan_vien');
                               </div>
                            
                             

                            <!------>
                            <?php if ($tt == "cong-viec") {?>
                         
                                <div class="col-md-12"> <div class="panel panel-success"><div class="panel-heading " style=" text-align:center;color: blue;" >Thông tin công việc</div></div></div>
                                
                                 <?php  
                                 $data = DB::table('tbl_congviec')->where('ma_nhan_vien', $id)->get();
                                 if(count($data)>0) { 
                                 ?>
                                <div class="col-md-12" >
                                    <table class="table table-bordered table-responsive" >

                                <tr>
                                    <th width="10"  align="center">PHÒNG BAN</th>
                                    <th width="10"  align="center">CÔNG VIỆC</th>
                                    <th width="90"  align="center">CHỨC VỤ</th>
                                    <th width="90"  align="center">BẰNG CẤP </th>           
                                    <th width="170"  align="center">MỨC LƯƠNG </th>
                                    <th width="10"  align="center">HỆ SÔ </th>
                                    <th width="90"  align="center">PHỤ CẤP</th>
                                    <th width="90"  align="center">NGÀY LÀM</th>
                                    <th width="50"  align="center"></th>           
                                </tr>

                                    <?php
                                 
                                    foreach ($data as $key => $value) {
                                    $phong_ban = DB::table('tbl_phongban')->join('tbl_congviec', 'tbl_phongban.phong_ban_id', '=', 'tbl_congviec.phong_ban_id')->where('ma_nhan_vien', $id)->get();
                                    $chuc_vu = DB::table('tbl_chucvu')->join('tbl_congviec', 'tbl_chucvu.chuc_vu_id', '=', 'tbl_congviec.chuc_vu_id')->where('ma_nhan_vien', $id)->get();
                                    $bang_cap = DB::table('tbl_bangcap')->join('tbl_congviec', 'tbl_bangcap.bang_cap_id', '=', 'tbl_congviec.bang_cap_id')->where('ma_nhan_vien', $id)->get();
                                    $pc_congviec = DB::table('tbl_pccongviec')->join('tbl_congviec', 'tbl_pccongviec.cong_viec_id', '=', 'tbl_congviec.cong_viec_id')->where('ma_nhan_vien', $id)->get();
                                    ?>
                                    <tr >
                                    <td class="row1" width="100" align="left"><?php foreach ($phong_ban as $keyp => $valuep) {
                                        echo $valuep->ten_phong_ban;
                                    } ?></td>

                                    <td class="row1" width="100" align="left"><?php foreach ($pc_congviec as $keyp => $valuep) {
                                        echo $valuep->ten_cong_viec;
                                    } ?></td>
                                    <td class="row1" width="100" align="left"><?php foreach ($chuc_vu as $keyp => $valuep) {
                                        echo $valuep->ten_chuc_vu;
                                    } ?></td>
                                    <td class="row1" width="100" align="left"><?php foreach ($bang_cap as $keyp => $valuep) {
                                        echo $valuep->ten_bang_cap;
                                    } ?></td>
                                    <td  class="row1" align="left">{{ $value->muc_luong_cb}}</td>
                                    <td  class="row1" align="left">{{ $value->he_so}}</td>
                                    <td  class="row1" align="left">{{ $value->phu_cap}}</td>

                                    <td  class="row1" align="left">{{ $value->ngay_vao_lam}}</td>
                                     <td><button id="bt_congviec" class="btn btn-info">Update</button></td>
                                    </tr>
                                    <?php } ?>
                                    </table>     
                                </div>
                                <?php }?>
                                <!--**********************************************************************************************************************************-->  
                               
                                @if (count($data)>0)
                                <div id="cong_viec"> @include ('cap_nhat_thong_tin_cong_viec');</div>
                                @else
                                @include ('them_moi_cong_viec');
                                @endif
                            
                                <?php } ?>
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


            <style>
                td{text-align: center;}
                th{background: #2c3e50;}
                  #thong_tin{
                    display: none;
                  }
                  #cong_viec{
                   display: none;
                  }
            </style>


