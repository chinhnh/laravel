
@if ((Auth::user()->role)==1)
<meta charset="utf-8"/>

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
<div class="col-md-12 " style="margin-bottom:30px; " > 
    <form class="form-inline" action="{{ asset('storePhongban')}}" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Ký hiệu phòng" name="phong_ban_id"  />
        </div>
        <div class="form-group"> <input type="text"  class="form-control" placeholder="Tên phòng ban" name="ten_phong_ban"   />
        </div>
        <div class="form-group">
            <input type="hidden"  name="submit" value="add" />
            <input type="submit" class="btn btn-info" value=":|: Thêm :|:" /></td></div>
        </tr>
        </table>
    </form>

</div>

<!--***************************************************************************************************************-->          

<?php
if (count($tt_phongban) <> 0) {
    ?>



    <div class="col-md-12"> 
        <div style="overflow:auto;" >

            <table class="table table-responsive table-bordered table-striped ">
                <thead>
                    <tr>
                        <th >Ký hiệu phòng</th>         
                        <th >Tên Phòng</th> 
                        <th  >Sửa</th>
                        <th  >Xóa</th>
                    </tr></thead>
                <?php foreach ($tt_phongban as $row) { ?>
                    <tbody>
                        <tr>
                            <td >{{ $row->phong_ban_id }}</td>
                            <td >{{ $row->ten_phong_ban }}</td>


                            <td ><a href="{{ asset('editPhongban')}}/{{ $row->phong_ban_id }}"><i class="fa fa-check fa-2x"></i></a></td>
                            <td ><a href="{{ asset('deletePhongban')}}/{{ $row->phong_ban_id }}"><i class="fa fa-close fa-2x"></i></a></td>
                        </tr></tbody>
                <?php } ?>
            </table>

        </div></div>
    <?php
}
?>
<style >

    th{background-color: #2c3e50;}
</style>
@else 
    Đăng nhập với tài khoản Admin để tiếp tục!

@endif
<!--***************************************************************************************************************-->
