
@if ((Auth::user()->role)==1)
<!--********************-->
<table  class="table table-bordered ">
    <tr>
        <!--***************************************************************************************************************-->    
        <td class="row2" width="460" valign="top">

            <table  class="table table-bordered ">
                <tr>
                    <th width="">Ký hiệu phòng</th>         
                    <th width="">Tên Phòng</th>



                    <th width="60" colspan="2" align="center">Chức năng</th>
                </tr>

                <tr>
                    <td class="row1">{{ $tt_phongban->phong_ban_id }}</td>
                    <td class="row1" align="center">{{ $tt_phongban->ten_phong_ban }}</td>



                    <td ><a href="{{ asset('editPhongban')}}/{{ $tt_phongban->phong_ban_id }}"><i class="fa fa-check fa-2x"></i></a></td>
                    <td ><a href="{{ asset('deletePhongban')}}/{{ $tt_phongban->phong_ban_id }}"><i class="fa fa-close fa-2x"></i></a></td>
                </tr>

            </table>

        </td>

        <!--***************************************************************************************************************-->

        <td class="row2" width="290">
            <form action="{{ asset('updatePhongban') }}/{{ $tt_phongban->phong_ban_id }}" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <table class="table ">

                    <tr > 

                        <td nowrap="nowrap" align="right">Ký hiệu phòng:</td>
                        <td><input class="form-control" type="text" value="{{ $tt_phongban->phong_ban_id }}" name="phong_ban_id"  size="29" /></td>
                    </tr>
                    <tr>
                        <td nowrap="nowrap" align="right">Tên phòng ban:</td>
                        <td><input class="form-control" type="text"  value="{{ $tt_phongban->ten_phong_ban }}"name="ten_phong_ban"   size="29" /></td>
                    </tr>

                    <tr >
                        <td nowrap="nowrap" align="right">&nbsp;</td>

                        <td><input type="hidden" name="submit" value="update" />
                            <input class="btn btn-info" type="submit" value=":|: Sửa :|:" /></td>
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