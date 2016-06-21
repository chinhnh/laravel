<?php
$data = DB::table('tbl_nhanvien')->where('ma_nhan_vien', $id)->get();
foreach ($data as $key => $value) {
    ?>
<div class="col-md-12" >
            <div style="overflow:auto;" >
    <form  class="form-inline" action="{{ asset('update')}}/{{ $value->ma_nhan_vien }}" method="post" enctype="multipart/form-data">

        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        
                <!--****************************************************************************************************************-->
                <table class=" table table-responsive  ">

                    <tr>
                        <td >Mã nhân viên *:</td>
                        <td><input type="text" name="ma_nv" class="form-control" value="{{ $value->ma_nhan_vien}}"  /></td>
                        <td >Email:</td>
                        <td><input type="text" class="form-control" name="email" value="{{ $value->email}}" /></td>
                    </tr>

                    <tr >
                        <td >Họ và tên *</td>
                        <td><input type="text" class="form-control" name="ho_ten" value="{{ $value->ho_ten}}"  /></td>
                        <td >Ngày sinh:</td>
                        <td><input type="text" class="form-control" name="ngay_sinh" placeholder="(dd/mm/yyyy)" value="{{ $value->ngay_sinh}}"  /> 
                        </td>
                    </tr>

                    <tr>
                        <td>Giới tính</td>
                        <td><select class="form-control" name="gioi_tinh">
                                <?php if ($value->gioi_tinh == 1) { ?>
                                    <option value="1">Nam</option>
                                    <option value="0">Nữ</option>

                                <?php } else { ?>
                                    <option value="0">Nữ</option>
                                    <option value="1">Nam</option>
                                <?php } ?>
                            </select></td>
                        <td>Địa chỉ:</td>
                        <td colspan="3"><input class="form-control" type="text" name="dia_chi" value="{{ $value->dia_chi}}"  /></td>
                    </tr>

                    <tr>

                        <td  >Điện thoại :</td>
                        <td><input type="text" class="form-control" name="dien_thoai" value="{{ $value->dien_thoai}}"  /></td>

                        <td >Tình trạng:</td>
                        <td>
                            <select class="form-control" name="nghi_viec">
                                <?php
                                if (($value->nghi_viec) == 0) {
                                    ?>
                                    <option value="0">Làm việc </option>
                                    <option value="1">Nghỉ việc </option>

                                    <?php
                                } else {
                                    ?> 
                                    <option  value="1">Nghỉ việc </option>
                                    <option value="0">Làm việc </option>
                                <?php } ?>
                            </select>
                        </td>
                        

                    </tr>
                    <tr>
                        <td></td><td></td>
                     <td>Ảnh</td>
                         <td> <div><input type="file" name="images" ></div></td>

                    </tr>

                    <tr>

                        <td colspan="4" align="center" nowrap="nowrap">
                            <br /><input class="btn btn-danger" type="submit" name="submit" value="update" /></td>
                    </tr>

                </table>
            
    </form>
</div></div>
<?php } ?>
