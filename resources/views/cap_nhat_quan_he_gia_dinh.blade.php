<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Untitled Document</title>

    </head>

    <body>
        <div class="container">
            <div class="row" >

                <div class="col-md-3"><div class="panel panel-warning" >
                        <div class="panel-heading"> <i class="fa fa-group fa-2x"></i><a href="<?php echo base_url(); ?>home/nhanvien/them-gia-dinh/<?php echo $tt_nhanvien[0]['ma_nhan_vien']; ?>"> Quan hệ gia đình</a></div>
                    </div></div>

                <div class="col-md-3"><div class="panel panel-info" >
                        <div  class=" panel-heading"> <i class=" fa fa-edit fa-2x"></i><a href="<?php echo base_url(); ?>home/nhanvien/them-hop-dong/<?php echo $tt_nhanvien[0]['ma_nhan_vien']; ?>"> Hợp đồng</a></div>
                    </div></div> 

            </div>   
        </div>
        <!--***************************************************************************************************************-->          
        <table  class="table table-bordered table-responsive">
            <tr>
                <!--***************************************************************************************************************-->    
                <td class="row2" width="400" valign="top">
                    <?php
                    if (count($tt_giadinh) > 0) {
                        ?>
                        <table width="460" align="center" cellpadding="1" cellspacing="1">
                            <tr>
                                <th width="170">Tên người thân</th>         
                                <th width="65">Quan hệ</th> 
                                <th width="40">Năm sinh</th>
                                <th width="80">Điện thoại</th>
                                <th width="40">Nghề nghiệp</th>
                                <th width="40">Địa chỉ</th>
                                <th width="40">Ghi chú</th>

                                <th width="60" colspan="3" align="center">Chức năng</th>
                            </tr>
                            <?php foreach ($tt_giadinh as $row_giadinh) { ?>
                                <tr>
                                    <td class="row1"><?php echo $row_giadinh['ten_nguoi_than']; ?></td>
                                    <td class="row1" align="center"><?php echo $row_giadinh['moi_quan_he']; ?></td>
                                    <td class="row1" align="center"><?php echo $row_giadinh['nam_sinh']; ?></td>
                                    <td class="row1"><?php echo $row_giadinh['dien_thoai']; ?></td>
                                    <td class="row1" align="center"><?php echo $row_giadinh['nghe_nghiep']; ?></td>
                                    <td class="row1" align="center"><?php echo $row_giadinh['dia_chi']; ?></td>
                                    <td class="row1" align="center"><?php echo $row_giadinh['ghi_chu']; ?></td>

                                    <td class="row1"><a href="<?echo base_url();?>home/nhanvien/them-gia-dinh/<?php echo $tt_nhanvien[0]['ma_nhan_vien']; ?>">Thêm</a></td>
                                    <td class="row1"><a href="<? echo base_url();?>home/nhanvien/sua-gia-dinh/<?php echo $tt_nhanvien[0]['ma_nhan_vien']; ?>/<?php echo $row_giadinh['id']; ?>">Sửa</a></td>
                                    <td class="row1"><a href="<? echo base_url();?>home/nhanvien/xoa/<?php echo $row_giadinh['id']; ?>">Xoá</a></td>
                                </tr>
                            <?php } ?>
                        </table>
                        <?php
                    }
                    ?>
                </td>

                <!--***************************************************************************************************************-->

                <td class="row2" width="290">
                    <form action="<?php echo base_url(); ?>home/nhanvien/sua-gia-dinh/<?php echo $tt_nhanvien[0]['ma_nhan_vien']; ?>/<?php echo $get_giadinh[0]['id']; ?>" method="post">
                        <table class="table table-responsive">

                            <tr valign="baseline"> 

                                <td nowrap="nowrap" align="right">Tên nhân viên:</td>
                                <td><?php echo $tt_nhanvien[0]['ho_ten']; ?></td>
                            </tr>

                            <tr valign="baseline">
                                <td nowrap="nowrap" align="right">Mã nhân viên:</td>
                                <td><?php echo $tt_nhanvien[0]['ma_nhan_vien']; ?><input class="form-control" type="hidden" name="ma_nhan_vien" value="<?php echo $tt_nhanvien[0]['ma_nhan_vien']; ?>"  size="29" /></td>
                            </tr>

                            <tr valign="baseline">

                                <td nowrap="nowrap" align="right">Tên người thân:</td>
                                <td><input  type="text" name="ten_nguoi_than" class="form-control" value="<?php echo $get_giadinh[0]['ten_nguoi_than']; ?>" size="29" /></td>
                            </tr>

                            <tr valign="baseline">
                                <td nowrap="nowrap" align="right">Năm sinh:</td>
                                <td><input type="text" name="nam_sinh" class="form-control" value="<?php echo $get_giadinh[0]['nam_sinh']; ?>" size="29" /></td>
                            </tr>

                            <tr valign="baseline">
                                <td nowrap="nowrap" align="right">Mối quan hệ:</td>
                                <td><input type="text" name="moi_quan_he" class="form-control" value="<?php echo $get_giadinh[0]['moi_quan_he']; ?>" size="29" /></td>
                            </tr>

                            <tr valign="baseline">
                                <td nowrap="nowrap" align="right">Nghề nghiệp:</td>
                                <td><input type="text" name="nghe_nghiep" class="form-control" value="<?php echo $get_giadinh[0]['nghe_nghiep']; ?>" size="29" /></td>
                            </tr>

                            <tr valign="baseline">
                                <td nowrap="nowrap" align="right">Địa chỉ:</td>
                                <td><input type="text" name="dia_chi" class="form-control" value="<?php echo $get_giadinh[0]['dia_chi']; ?>" size="29" /></td>
                            </tr>

                            <tr valign="baseline">
                                <td nowrap="nowrap" align="right">Điện thoại:</td>
                                <td><input type="text" name="dien_thoai" class="form-control" value="<?php echo $get_giadinh[0]['dien_thoai']; ?>" size="29" /></td>
                            </tr>

                            <tr valign="baseline">
                                <td nowrap="nowrap" align="right">Ghi chú:</td>
                                <td><input type="text" name="ghi_chu" class="form-control" value="<?php echo $get_giadinh[0]['ghi_chu']; ?>" size="29" /></td>
                            </tr>
                            <tr valign="baseline">
                                <td nowrap="nowrap" align="right">&nbsp;</td>
                                <td><input class="btn btn-success" type="submit" name="submit" value="update" /></td>
                            </tr>
                        </table>
                    </form>
                </td>

            </tr>
        </table>
    </body>
</html>