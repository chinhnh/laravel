<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class SearchModel extends Model {

	protected $table='tbl_nhanvien';
	public $timestamps=false;
	protected $primaryKey='ma_nhan_vien';

}
