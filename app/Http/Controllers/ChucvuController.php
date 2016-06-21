<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\ChucvuModel;
use App\Http\Requests\ChucvuRequest;
class ChucvuController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $require = 'them_moi_chuc_vu';
        $data = ChucvuModel::all();
        return view('call')->nest('content', $require, array('tt_chucvu' => $data));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {

        $require = 'them_moi_chuc_vu';
        $data = ChucvuModel::all();
        return view('call')->nest('content', $require, array('tt_chucvu' => $data));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(ChucvuRequest $request)
    {
        $post = new ChucvuModel;
        $post->chuc_vu_id = \Request::get('chuc_vu_id');
        $post->ten_chuc_vu = \Request::get('ten_chuc_vu');
        $post->save();
        return \Redirect::to('chucvu');
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
        $data = ChucvuModel::find($id);
        $require = 'cap_nhat_chuc_vu';
        return view('call')->nest('content', $require, array('tt_chucvu' => $data));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        $post = ChucvuModel::find($id);
        $post->chuc_vu_id = \Request::get('chuc_vu_id');
        $post->ten_chuc_vu = \Request::get('ten_chuc_vu');
        $post->save();
        return \Redirect::to('chucvu');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        ChucvuModel::destroy($id);
        return \Redirect::to('chucvu');
    }
}
