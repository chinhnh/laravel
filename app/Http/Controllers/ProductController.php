<?php

namespace App\Http\Controllers;

class ProductController extends Controller
{

    public function __construct()
    {
        //$this->test();
    }

    public function view($name, $gia)
    {
        echo 'Ban dang xem san pham ' . $name . ' có giá = ' . $gia;
    }

    public function add($name, $gia)
    {
        //echo "add";
        return view("add");
    }

    public function show()
    {
        $data = array("sp1" => "1", "sp2" => "2");
        //$data='show show show show';
        return view("show")->with('name', $data);
    }

    public function getTest()
    {
        echo "wellcome";
        //$results = DB::select('select * from tbl_nhanvien'); 
        //print_r($results);
    }

    public function getTest2($name, $ma)
    {
        echo "name:$name<br>" . "code:$ma";
    }
}

?>