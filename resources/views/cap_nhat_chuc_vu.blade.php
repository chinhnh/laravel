@if ((Auth::user()->role)==1)
<!--***************************************************************************************************************-->          
<table  class="table table-bordered">
    <tr>
        <!--***************************************************************************************************************-->    
        <td class="row2" width="460" valign="top">
            <?php
            if (count($tt_chucvu) <> 0) {

                ?>
                <table class="table table-striped table-bordered table-responsive ">
                    <tr>
                        <th width="">Ký hiệu chức vụ</th>         
                        <th width="">Tên chức vụ</th>           
                        <th>Sửa</th>
                        <th>Xóa</th>
                    </tr>

                    <tr>

                    <tr>
                        <td class="row1">{{ $tt_chucvu->chuc_vu_id }}</td>
                        <td class="row1" align="center">{{ $tt_chucvu->ten_chuc_vu }}</td>      
                        <td class="row1"><a href="{{ asset('editChucvu')}}/{{ $tt_chucvu->chuc_vu_id }}"><i class="fa fa-check fa-2x"></i></a></td>
                        <td class="row1"><a href="{{ asset('deleteChucvu')}}/{{ $tt_chucvu->chuc_vu_id }}"><i class="fa fa-close fa-2x"></i></a></td>
                    </tr>


                </table>
                <?php
            }

            ?>
        </td>

        <!--***************************************************************************************************************-->

        <td class="row2" width="290">
            <form action="{{ asset('updateChucvu') }}/{{ $tt_chucvu->chuc_vu_id }}" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <table class="table">

                    <tr > 

                        <td nowrap="nowrap" align="right">Ký hiệu chức vụ:</td>
                        <td><input class="form-control" type="text" value="{{ $tt_chucvu->chuc_vu_id }}" name="chuc_vu_id"  size="29" /></td>
                    </tr>
                    <tr>
                        <td nowrap="nowrap" align="right">Tên chức vụ:</td>
                        <td><input class="form-control" type="text"  value="{{ $tt_chucvu->ten_chuc_vu }}"name="ten_chuc_vu"   size="29" /></td>
                    </tr>

                    <tr >
                        <td nowrap="nowrap" align="right">&nbsp;</td>
                        <td><input class="btn btn-success" type="submit" value=":|: Sửa :|:" /></td>
                    </tr>
                </table>
            </form>
        </td>

    </tr>
</table>
<style >

    th{background-color: #2c3e50;}
</style>
@else 
Đăng nhập với tài khoản Admin để tiếp tục!

@endif