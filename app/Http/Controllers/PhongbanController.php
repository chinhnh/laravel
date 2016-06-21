<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\PhongbanModel;
use App\Http\Requests\PhongbanRequest;
class PhongbanController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $require = 'them_moi_phong';
        $data = phongbanModel::all();
        return view('call')->nest('content', $require, array('tt_phongban' => $data));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $require = 'them_moi_phong';
        $data = phongbanModel::all();
        return view('call')->nest('content', $require, array('tt_phongban' => $data));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(PhongbanRequest $request)
    {
        $post = new phongbanModel;
        $post->phong_ban_id = \Request::get('phong_ban_id');
        $post->ten_phong_ban = \Request::get('ten_phong_ban');
        $post->save();
        return \Redirect::to('phongban');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $data = phongbanModel::find($id);
        $require = 'cap_nhat_phong';
        return view('call')->nest('content', $require, array('tt_phongban' => $data));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        $post = phongbanModel::find($id);
        $post->phong_ban_id = \Request::get('phong_ban_id');
        $post->ten_phong_ban = \Request::get('ten_phong_ban');
        $post->save();
        return \Redirect::to('phongban');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
        phongbanModel::destroy($id);
        return \Redirect::to('phongban');
    }
}
