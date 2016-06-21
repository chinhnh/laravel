<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\SearchModel;

use Illuminate\Http\Request\SearchRequest;
class SearchController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$name=\Request::get('name');
		$data=SearchModel::where('ho_ten', 'LIKE', '%'.$name.'%')->get();    
        $require="tim_kiem";
        return view('call')->nest('content',$require,array('data'=>$data));
	}

	

}
