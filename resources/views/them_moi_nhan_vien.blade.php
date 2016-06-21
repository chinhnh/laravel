
<div class="col-md-12">
    <div style="overflow:auto;" >
        <form action="{{ asset('storeNhansu') }}" method="post" enctype="multipart/form-data" >
            <input type="hidden" name="_token" value="{{ csrf_token() }}">



            <div class="col-md-4 item form-group" >Mã nhân viên *:
                <div ><input class="form-control"  type="number" name="ma_nv"  data-validate-length-range="3,5"    required="required"  /></div>
            </div>

            <div class="col-md-4 item form-group">Họ và tên *
                <div for="ho-ten"><input type="text" class="form-control"  name="ho_ten" data-validate-length-range="6" data-validate-words="2"  required="required"  />
                </div></div>
            <div class="col-md-4 item form-group">Email:
                <div><input type="email" class="form-control" name="email"  required="required"  /></div></div>
            <div class="col-md-4 item form-group">Ngày sinh:
                <div><input type="text" class="form-control"  name="ngay_sinh" required="required"  /> 
                </div></div>



            <div class="col-md-4 item form-group">Giới tính
                <div><select class="form-control"  name="gioi_tinh">
                        <option value="1">Nam</option>
                        <option value="0">Nữ</option>
                    </select></div></div>

            <div class="col-md-4 item form-group">Địa chỉ:
                <div ><input class="form-control"  type="text" name="dia_chi" required="required"  /></div></div>

            <div class="col-md-4 item form-group">Điện thoại :
                <div ><input class="form-control"  type="number" id="dien_thoai" name="dien_thoai" required="required" data-validate-length-range="8,20"  /></div></div>

            <div class="col-md-4 item form-group">Tình trạng:

                <div >
                    <select class="form-control"  name="nghi_viec">     
                        <option value="0">Làm việc </option>
                        <option value="1">Nghỉ việc </option>
                    </select>
                </div></div>
           <div class="col-md-4 item form-group">Ảnh:

             <div><input type="file" name="images" ></div>
           </div>


            <div class="col-md-12">
                <div  align="center">
                    <input id="send" class="btn btn-primary" type="submit" value="Đồng ý" /></div>
            </div>

            <input   type="hidden"  name="submit" value="add" />
        </form>
    </div>
</div>

<script>
    // initialize the validator function
    validator.message['date'] = 'not a real date';

    // validate a field on "blur" event, a 'select' on 'change' event & a '.reuired' classed multifield on 'keyup':
    $('form')
            .on('blur', 'input[required], input.optional, select.required', validator.checkField)
            .on('change', 'select.required', validator.checkField)
            .on('keypress', 'input[required][pattern]', validator.keypress);

    $('.multi.required')
            .on('keyup blur', 'input', function () {
                validator.checkField.apply($(this).siblings().last()[0]);
            });



    /* FOR DEMO ONLY */

    $('#alerts').change(function () {
        validator.defaults.alerts = (this.checked) ? false : true;
        if (this.checked)
            $('form .alert').remove();
    }).prop('checked', false);
</script>
