<?php
//Route::get('/', 'UserController@index');


Route::get('/', function() {
    if (Auth::check()) {
        return view('index');
    } else {
        return redirect('auth/login');
    }
});

Route::get('home', 'HomeController@index');

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);
Route::get('auth/login', ['as' => 'getLogin', 'uses' => 'Auth\AuthController@getLogin']);

Route::post('auth/login', ['as' => 'postLogin', 'uses' => 'Auth\AuthController@postLogin']);


//Route::get('/array',['name'=>'get.array','uses'=>'HomeController@showWelcome']);
//Route::get('/string','HomeController@showWelcome');
Route::get('nhansu', function() {
    return view('index');
});
Route::controller('san-pham', 'UserController');

Route::get('show/{tt}/{id}', 'UserController@show');

Route::get('update/{id}', 'UserController@edit');

Route::get('delete/{id}', function($id) {
    DB::table('tbl_nhanvien')->where('ma_nhan_vien', $id)->delete();
    return Redirect::to("/");
});


Route::get('congviec', function() {
    return view('cap_nhat_thong_tin_cong_viec');
});
Route::get('edit/{id}', 'UserController@edit');
Route::post('update/{id}', 'UserController@update');
Route::get('/createNhansu', 'UserController@create');
Route::post('/storeNhansu', 'UserController@store');
Route::get('phongban', 'PhongbanController@index');
Route::get('chucvu', 'ChucvuController@index');

Route::post('storeCongviec','CongviecController@store');
Route::get('createCongviec/{id}','CongviecController@create');
Route::post('updateCongviec/{id}','CongviecController@update');


Route::get('/createPhongban', 'PhongbanController@create');
Route::post('/storePhongban', 'PhongbanController@store');
Route::get('/deletePhongban/{id}', 'PhongbanController@destroy');
Route::get('editPhongban/{id}', 'PhongbanController@edit');
Route::post('updatePhongban/{id}', 'PhongbanController@update');

Route::get('/createChucvu', 'ChucvuController@create');
Route::post('/storeChucvu', 'ChucvuController@store');
Route::get('/deleteChucvu/{id}', 'ChucvuController@destroy');
Route::get('editChucvu/{id}', 'ChucvuController@edit');
Route::post('updateChucvu/{id}', 'ChucvuController@update');

Route::post('/search', 'SearchController@index');


Route::get('showjoin',function(){
$data=App\CongviecModel::find('001')->phongban()->get();
print_r($data);
});
//Route::get('get',function(){
//return view('call')->nest('content','call2',array());
//return view('call');
//});
/*
Route::filter("/", function(){
  if(Auth::user()->id !=0)
  {  
     return Redirect::to("index");
  }
  else{
    return redirect('auth/login');
  }
});*/
Route::get('getjoinphong',function(){
$data=App\CongviecModel::find(001)->get();
echo "<pre>";
print_r($data);
echo "</pre>";
});
Route::get('adduser',['as'=>'getadduser','uses'=>'MemberController@getadduser']);
Route::post('adduser',['as'=>'postadduser','uses'=>'MemberController@postadduser']);
