<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<!-- BOOTSTRAP STYLES-->
<link href="{{ asset('public/assets/css/bootstrap.css')}}" rel="stylesheet" />
<!-- FONTAWESOME ICONS STYLES-->
<link href="{{ asset('public/assets/css/font-awesome.css')}}" rel="stylesheet" />
<!--CUSTOM STYLES-->
<link href="{{asset('public/assets/css/style.css')}}" rel="stylesheet" />
<div class="container">
    <div class="row">

        <div style="margin-top:50px;"class="col-md-4 col-md-offset-4">

            @if (count($errors) > 0)
            <div class="panel panel-warning">
                <div style="text-align:center;" class="panel-heading" >
                    @foreach( $errors->all() as $error )
                    <p> {!! $error !!}</p>
                    @endforeach
                </div></div>
            @endif


            <div class="panel panel-success">
                <div class="panel-heading">
                    <h4>Login</h4>
                </div>
                <div class="panel-body">

                    <form role="form" action="" method="POST">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="username", name="user">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="password", name="pass">
                        </div>
                        <input type="submit" value="Login" class="btn btn-info">

                    </form>

                </div>


            </div>

        </div>
    </div>


</div>
<script src="{{ asset('public/assets/js/jquery-1.11.1.js')}}"></script>
<!-- BOOTSTRAP SCRIPTS -->
<script src="{{ asset('public/assets/js/bootstrap.js')}}"></script>
<!-- METISMENU SCRIPTS -->
<script src="{{ asset('public/assets/js/jquery.metisMenu.js')}}"></script>
<!-- CUSTOM SCRIPTS -->
<script src="{{ asset('public/assets/js/custom.js')}}"></script>