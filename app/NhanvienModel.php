<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NhanvienModel extends Model {

    public $table = 'tbl_nhanvien';
    protected $primaryKey = 'ma_nhan_vien';
    public $timestamps = false;

}
