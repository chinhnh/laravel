
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
<div class="col-md-12">

            <form action="{{ asset('storeCongviec')}}" method="post" >
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <table class="table table-responsive ">
                    <!--**********************************************************************************************************************************-->  
                    <tr >
                        <td>Mã nhân viên:</td>
                        <td style="color:red;">{!! $id !!}</td>
                        <input type="hidden" name="ma_nv" value="{!! $id !!}"  />
                        <td >Ngày vào làm *:</td>
                        <td><input class="form-control" type="text" name="ngay_vao_lam" value=""  /></td>
                    </tr>
                    <!--**********************************************************************************************************************************-->
                    <tr >
                        <td >Phòng ban:</td>
                        <td><select class="form-control" name="phong_ban_id">
                                <option value="0"></option>
                                <?php
                                $tt_phongban=DB::table('tbl_phongban')->get();
                                foreach ($tt_phongban as $row_phongban) {
                                    ?>
                                    <option  value="{{$row_phongban->phong_ban_id}}">{{$row_phongban->ten_phong_ban}}</option>
                                    <?php
                                }
                                ?>

                            </select></td>

                        <td >Mức lương:</td>
                        <td><input type="text" class="form-control" name="muc_luong_cb" value=""  /></td>

                    </tr>
                    <!--**********************************************************************************************************************************-->    
                    <tr >
                        <td >Công việc:</td>
                        <td><select  class="form-control" name="cong_viec_id">
                                <option   value="0"></option>
                                <?php
                                 $tt_pccongviec=DB::table('tbl_pccongviec')->get();
                                foreach ($tt_pccongviec as $row_congviec) {
                                    ?>
                                    <option  value="{{$row_congviec->cong_viec_id}}">{{$row_congviec->ten_cong_viec}}</option>
                                    <?php
                                }
                                ?>
                            </select></td>


                        <td >Phụ cấp:</td>
                        <td><input class="form-control" type="text" name="phu_cap"  /></td>

                    </tr>
                    <!--**********************************************************************************************************************************-->
                    <tr >
                        <td  >Chức vụ:</td>
                        <td><select  class="form-control" name="chuc_vu_id">
                                <option   value="0"></option>
                                <?php
                                $tt_chucvu=DB::table('tbl_chucvu')->get();
                                foreach ($tt_chucvu as $row_chucvu) {
                                    ?>
                                    <option value="{{$row_chucvu->chuc_vu_id}}">{{$row_chucvu->ten_chuc_vu}}</option>
                                    <?php
                                }
                                ?>
                            </select></td>

                        <td  >Hệ số:</td>
                        <td><input type="text" class="form-control" name="he_so" value=""  /></td>

                    </tr>
                    <!--**********************************************************************************************************************************-->    
                    <tr>
                        <td >Bằng cấp:</td>
                        <td><select class="form-control" name="bang_cap_id">
                                <option  value="0"></option>
                                <?php
                                $tt_bangcap=DB::table('tbl_bangcap')->get();
                                foreach ($tt_bangcap as $row_bangcap) {
                                    ?>
                                    <option value="{{$row_bangcap->bang_cap_id}}">{{$row_bangcap->ten_bang_cap}}</option>
                                    <?php
                                }
                                ?>
                            </select></td>

                    </tr>

                    <!--**********************************************************************************************************************************-->
                    <tr >
                        <td  ><input align="center" class="btn btn-primary" type="submit" name="submit" value="Add" /></td>
                    </tr>
                </table>

            </form>
  </div>

<style >

    th{background-color: #2c3e50;}
</style>