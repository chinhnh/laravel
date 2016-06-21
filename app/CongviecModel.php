<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class CongviecModel extends Model {

	protected $table='tbl_congviec';
	public $timestamps=false;
    protected $primaryKey = 'ma_nhan_vien';
     public function phongban()
    {
        return $this->hasOne('App\PhongbanModel');
    }

}
