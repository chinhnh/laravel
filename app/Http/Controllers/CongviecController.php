<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\CongviecRequest;
use App\CongviecModel;
class congviecController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create($id)
    {   
        $require="them_moi_cong_viec";
        return view('call')->nest('content',$require,array('id'=>$id));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(CongviecRequest $request)
    {
        $post=new CongviecModel;
        $id=\Request::get('ma_nv');
         $post->ma_nhan_vien = \Request::get('ma_nv');
         $post->ngay_vao_lam= \Request::get('ngay_vao_lam');
         $post->muc_luong_cb= \Request::get('muc_luong_cb');
         $post->he_so= \Request::get('he_so');
         $post->phu_cap= \Request::get('phu_cap');
         $post->phong_ban_id= \Request::get('phong_ban_id');
         $post->chuc_vu_id= \Request::get('chuc_vu_id');
         $post->cong_viec_id= \Request::get('cong_viec_id');
         $post->bang_cap_id= \Request::get('bang_cap_id');
         $post->save();
         return \Redirect::to('show/cong-viec/'.$id);
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        $post=CongviecModel::find($id);
         
         $post->ma_nhan_vien = $id;
         $post->ngay_vao_lam= \Request::get('ngay_vao_lam');
         $post->muc_luong_cb= \Request::get('muc_luong_cb');
         $post->he_so= \Request::get('he_so');
         $post->phu_cap= \Request::get('phu_cap');
         $post->phong_ban_id= \Request::get('phong_ban_id');
         $post->chuc_vu_id= \Request::get('chuc_vu_id');
         $post->cong_viec_id= \Request::get('cong_viec_id');
         $post->bang_cap_id= \Request::get('bang_cap_id');
         $post->save();
         return \Redirect::to('show/cong-viec/'.$id);
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
    }
}
