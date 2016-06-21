<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class MemberModel extends Model {

	protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    //protected $fillable = ['user', 'pass', 'admin'];
    public $timestamps = false;

}
