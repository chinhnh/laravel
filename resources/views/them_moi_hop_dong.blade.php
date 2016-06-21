<meta charset="utf-8"/>
<?php
$info_login = $this->session->userdata('lay_user');
if (isset($info_login['admin']) && $info_login['admin'] == 1) {  //xác định đăng nhập
    ?>
    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml">
        <head>
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
            <title>Untitled Document</title>

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

    <?php
    if (count($tt_hopdong) > 0) {
        ?>
                    <table class="table table-responsive table-bordered">
                        <tr>
                            <th width="120">Số QĐ</th>
                            <th width="80">Từ ngày</th>
                            <th width="100">Đến ngày</th>
                            <th width="120">Loại hợp đồng</th>
                            <th width="200">Ghi chú</th>
                            <th colspan="3">Chức năng</th>
                        </tr>
        <?php foreach ($tt_hopdong as $row_hopdong) { ?>
                            <tr>
                                <td class="row1"><?php echo $row_hopdong['so_quyet_dinh']; ?></td>
                                <td class="row1"><?php echo $row_hopdong['tu_ngay']; ?></td>
                                <td class="row1"><?php echo $row_hopdong['den_ngay']; ?></td>
                                <td class="row1">
            <?php
            if ($row_hopdong['loai_hop_dong'] == 0) {
                echo "Không thời hạn";
            } else {
                echo $row_hopdong['loai_hop_dong'];
                echo " Năm";
            }
            ?>
                                </td>
                                <td class="row1"><?php echo $row_hopdong['ghi_chu']; ?></td>
                                <td class="row1"><a href="<?php echo base_url(); ?>home/nhanvien/them-hop-dong/<?php echo $tt_nhanvien[0]['ma_nhan_vien']; ?>">Thêm</a></td>
                                <td class="row1"><a href="<?php echo base_url(); ?>home/nhanvien/sua-hop-dong/<?php echo $tt_nhanvien[0]['ma_nhan_vien']; ?>/<?php echo $row_hopdong['id']; ?>">Sửa</a></td>
                                <td class="row1"><a href="<?php echo base_url(); ?>home/xoa/hopdong/<?php echo $row_hopdong['id']; ?>/<?php echo $tt_nhanvien[0]['ma_nhan_vien']; ?>">Xoá</a></td>
                            </tr>
        <?php } ?>
                    </table>
        <?php
    }
    ?>



                <form action="<?php echo base_url(); ?>home/nhanvien/them-hop-dong/<?php echo $tt_nhanvien[0]['ma_nhan_vien']; ?>" method="post">

                    <table class="table">

                        <tr >
                            <td width="135" align="right" >Mã nhân viên</td>
                            <td width="235"><?php echo $tt_nhanvien[0]['ma_nhan_vien']; ?><input type="hidden" name="ma_nhan_vien" value="<?php echo $tt_nhanvien[0]['ma_nhan_vien']; ?>" readonly="readonly" size="32" /></td>
                            <td width="135" >Tên nhân viên</td>
                            <td width="235"><?php echo $tt_nhanvien[0]['ho_ten']; ?></td>
                        </tr>

                        <tr >    
                            <td nowrap="nowrap" align="right">Số quyết định:</td>
                            <td><input type="text" class="form-control" name="so_quyet_dinh" value="" size="32" /></td>
                            <td >Từ ngày:</td>
                            <td><input type="text" class="form-control" name="tu_ngay" value="" size="35" /></td>

                        </tr>


                        <tr >  
                            <td  align="right">Loại hợp đồng:</td>
                            <td><select class="form-control" name="loai_hop_dong">
                                    <option value="0">Không thời hạn</option>
                                    <option value="1">1 Năm</option>
                                    <option value="2">2 Năm</option>
                                    <option value="3">3 Năm</option>
                                    <option value="4">4 Năm</option>
                                    <option value="5">5 Năm</option>
                                </select></td>

                            <td>Đến ngày:</td>
                            <td><input class="form-control" type="text" name="den_ngay" value="" size="35" /></td>
                        </tr>

                        <tr >
                            <td align="right">Ghi chú:</td>
                            <td colspan="3"><input class="form-control" type="text" name="ghi_chu" value="" size="121" /></td>
                        </tr>

                        <tr >
                            <td colspan="4" align="center" ><input class="btn btn-success" type="submit"  name="submit" value="add" /></td>
                        </tr>

                    </table>
                </form>


            </body>
    </html>
    <?php
} else {
    echo("<script>alert('Bạn hãy đăng nhập với tài khoản admin để thực hiện thao tác với $title');</script>");
    //echo("<script>location.href='user/dang_nhap.php';</script>");
}
?>