 
<?php
$tt_phongban = DB::table('tbl_phongban')->get();
$tt_chucvu = DB::table('tbl_chucvu')->get();
$tt_bangcap = DB::table('tbl_bangcap')->get();
$tt_pccongviec = DB::table('tbl_pccongviec')->get();
$data = DB::table('tbl_congviec')->where('ma_nhan_vien', $id)->get();
$tt_nhanvien = DB::table('tbl_nhanvien')->where('ma_nhan_vien', $id)->get();
foreach ($data as $key => $value) {
    $phong_ban = DB::table('tbl_phongban')->join('tbl_congviec', 'tbl_phongban.phong_ban_id', '=', 'tbl_congviec.phong_ban_id')->where('ma_nhan_vien', $id)->get();
    $chuc_vu = DB::table('tbl_chucvu')->join('tbl_congviec', 'tbl_chucvu.chuc_vu_id', '=', 'tbl_congviec.chuc_vu_id')->where('ma_nhan_vien', $id)->get();
    $bang_cap = DB::table('tbl_bangcap')->join('tbl_congviec', 'tbl_bangcap.bang_cap_id', '=', 'tbl_congviec.bang_cap_id')->where('ma_nhan_vien', $id)->get();
    $pc_congviec = DB::table('tbl_pccongviec')->join('tbl_congviec', 'tbl_pccongviec.cong_viec_id', '=', 'tbl_congviec.cong_viec_id')->where('ma_nhan_vien', $id)->get();
    ?>
    <!--**********************************************************************************************************************************-->  
    <div class="col-md-12" style="margin: 10px 0px;">
        <div style="overflow:auto;" >
            <form action="{{ asset('updateCongviec')}}/{{ $value->ma_nhan_vien }}" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <table class="table table-responsive" >
                    <!--**********************************************************************************************************************************-->  


                    <tr >
                        <td width="102" >Mã nhân viên:</td><td>{{ $value->ma_nhan_vien }}</td>
                    <input type="hidden" name="ma_nv" value="{{ $value->ma_nhan_vien }}" size="10" />

                    <td >Tên nhân viên *:</td>
                    <td>@foreach($tt_nhanvien as $keyp =>$valuep) {{ $valuep->ho_ten }} @endforeach</td> 

                    </tr>
                    <!--**********************************************************************************************************************************-->
                    <tr>
                        <td nowrap="nowrap" >Phòng ban:</td>
                        <td><select class="form-control" name="phong_ban_id">
                                <?php foreach ($phong_ban as $keyp => $valuep) { ?>
                                    <option value="{{ $valuep->phong_ban_id }}">{{ $valuep->ten_phong_ban }}</option>
                                <?php } ?>
                                <?php
                                foreach ($tt_phongban as $key => $row) {
                                    ?>
                                    <option value="{{ $row -> phong_ban_id}}">{{ $row->ten_phong_ban}}</option>
                                    <?php
                                }
                                ?>

                            </select></td>

                        <td nowrap="nowrap" >Mức lương:</td>
                        <td><input class="form-control" type="text" name="muc_luong_cb" value="{{ $value->muc_luong_cb }}" size="50" /></td>

                    </tr>
                    <!--**********************************************************************************************************************************-->    
                    <tr valign="baseline">
                        <td nowrap="nowrap" >Công việc:</td>
                        <td><select class="form-control" name="cong_viec_id">
                                <?php foreach ($pc_congviec as $keyp => $valuep) { ?>
                                    <option value="{{ $valuep->cong_viec_id }}">{{ $valuep->ten_cong_viec }}</option>
                                    <?php
                                }
                                ?>
                                <?php
                                foreach ($tt_pccongviec as $key => $row) {
                                    ?>
                                    <option value="{{ $row -> cong_viec_id }}">{{ $row -> ten_cong_viec }}</option>
                                    <?php
                                }
                                ?>

                            </select></td>


                        <td nowrap="nowrap">Phụ cấp:</td>
                        <td><input class="form-control" type="text" name="phu_cap" value="{{ $value->phu_cap }}" size="50" /></td>

                    </tr>
                    <!--**********************************************************************************************************************************-->
                    <tr valign="baseline">
                        <td nowrap="nowrap" >Chức vụ:</td>
                        <td><select class="form-control" name="chuc_vu_id">
                                <?php foreach ($chuc_vu as $keyp => $valuep) { ?>
                                    <option value="{{ $valuep->chuc_vu_id }}">{{ $valuep->ten_chuc_vu }}</option>
                                <?php } ?>
                                <?php
                                foreach ($tt_chucvu as $key => $row) {
                                    ?>
                                    <option value="{{ $row -> chuc_vu_id }}">{{ $row -> ten_chuc_vu }}</option>
                                    <?php
                                }
                                ?>

                            </select></td>

                        <td nowrap="nowrap" >Hệ số:</td>
                        <td><input class="form-control" type="text" name="he_so" value="{{ $value->he_so }}" size="50" /></td>

                    </tr>
                    <!--**********************************************************************************************************************************-->    
                    <tr>
                        <td nowrap="nowrap" >Bằng cấp:</td>
                        <td><select class="form-control" name="bang_cap_id">
                                <?php foreach ($bang_cap as $keyp => $valuep) { ?>
                                    <option value="{{ $valuep->bang_cap_id }}">{{ $valuep->ten_bang_cap }}</option>
                                <?php } ?>
                                <?php
                                foreach ($tt_bangcap as $key => $row) {
                                    ?>
                                    <option value="{{ $row -> bang_cap_id }}">{{ $row -> ten_bang_cap }}</option>
                                    <?php
                                }
                                ?>

                            </select></td>

                        <!--**********************************************************************************************************************************-->    
                        <td nowrap="nowrap" >Ngày vào làm *:</td>
                        <td><input class="form-control" type="text" name="ngay_vao_lam" value="{{ $value->ngay_vao_lam }}" size="50" /></td> 
                    </tr>
                    <!--**********************************************************************************************************************************-->    



                    <!--**********************************************************************************************************************************-->
                    <tr valign="baseline">
                        <td colspan="4" align="center" nowrap="nowrap"><br /><input class="btn btn-warning" type="submit" name="submit"value="update" /></td>
                    </tr>
                </table>
            </form>
            <!--**********************************************************************************************************************************-->  
        </div></div>
<?php } ?>