
                           
                            <div class="col-md-12" style="margin-bottom: 20px;">                                                
                                <form class="form-inline" method="post" action="{{asset('search')}}">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <input type="text" class="form-control" placeholder="nhập tên" name="name"  size="50px"/>          
                                    <input type="submit" class="btn btn-primary" name="click" value="Tìm"/>
                                </form>
                            </div><br />


                            <div class="col-md-12" >


                                <table class="table table-striped table-bordered table-responsive">

                                    <tr style="background-color: #2c3e50;">
                                        <th></th> 
                                        <th >MÃ NV</th>
                                        <th >HỌ VÀ TÊN</th>
                                        <th >GIỚI TÍNH</th>
                                        <th >NGÀY SINH</th>
                                        <th >ĐIỆN THOẠI</th>
                                        <th >QUÊ QUÁN</th>
                                        <th >EMAIL</th>
                                        
                                        <th >INFO</th>
                                        
                                       


                                    </tr>
                                    <tbody>
                                        <?php
                                        foreach ($data as $key => $value) {
                                            ?>

                                            <tr>
                                                <td><img style="width:50px; height:50px;" src="{{ asset('resources/upload')}}/{{ $value->images }}"></td>
                                                
                                                <td>{{ $value->ma_nhan_vien}}</td>
                                                <td style="width=150px;">{{ $value->ho_ten}}</td>
                                                <?php $gt = $value->gioi_tinh; ?>
                                                @if($gt==1)
                                                <td>Nam</td>
                                                @else
                                                <td>Nữ</td>
                                                @endif


                                                <td>{{ $value->ngay_sinh}}</td>
                                                <td>{{ $value->dien_thoai}}</td>
                                                <td>{{ $value->dia_chi}}</td>
                                                <td>{{ $value->email}}</td>
                                                <td><a href="{{ asset('show/thong-tin')}}/{{ $value->ma_nhan_vien }}"><i class="fa fa-check fa-2x"></i></a></td>
                                                  </tr>

                                        <?php } ?>
                                    </tbody>

                                </table>




                            </div>