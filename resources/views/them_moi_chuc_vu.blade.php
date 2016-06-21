@if ((Auth::user()->role)==1)        

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


<table  class="table table-bordered">
    <tr>
        <!--***************************************************************************************************************-->    
        <td class="row2" width="60%" valign="top">
            <?php
            //if (count($tt_chucvu)<>0)
            //{
            ?>
            <table class="table table-responsive table-bordered ">
                <tr>
                    <th width="">Ký hiệu chức vụ</th>         
                    <th width="">Tên Chức vụ</th> 


                    <th >Sửa</th>
                    <th>Xóa</th>
                </tr>
                <?php foreach ($tt_chucvu as $row) { ?>
                    <tr>
                        <td class="row1">{{ $row->chuc_vu_id }}</td>
                        <td class="row1" align="center">{{ $row->ten_chuc_vu }}</td>      
                        <td class="row1"><a href="{{ asset('editChucvu')}}/{{ $row->chuc_vu_id }}"><i class="fa fa-check fa-2x"></i></a></td>
                        <td class="row1"><a href="{{ asset('deleteChucvu')}}/{{ $row->chuc_vu_id }}"><i class="fa fa-close fa-2x"></i></a></td>
                    </tr>
                <?php } ?>
            </table>
            <?php
            //}
            ?>
        </td>

        <!--***************************************************************************************************************-->

        <td class="row2" width="290">
            <form action="{{ asset('storeChucvu') }}" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <table class="table table-responsive ">

                    <tr > 

                        <td nowrap="nowrap" align="right">Ký hiệu chức vụ:</td>
                        <td><input class="form-control" type="text" name="chuc_vu_id"  size="29" /></td>
                    </tr>
                    <tr>
                        <td nowrap="nowrap" align="right">Tên chức vụ:</td>
                        <td><input class="form-control" type="text" name="ten_chuc_vu"   size="29" /></td>
                    </tr>

                    <tr >
                        <td nowrap="nowrap" align="right">&nbsp;</td>
                    <input type="hidden" name="submit" value="add" />
                    <td><input class="btn btn-info" type="submit" value=":|: Thêm :|:" /></td>
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