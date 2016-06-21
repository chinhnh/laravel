<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class CongviecRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [

			'ngay_vao_lam'=>'required',
			'muc_luong_cb'=>'required',
			'phu_cap'=>'required',
			'he_so'=>'required',
			'phong_ban_id'=>'required',
			'chuc_vu_id'=>'required',
			'cong_viec_id'=>'required',
			'bang_cap_id'=>'required'
		];
	}
	public function messages(){
		return[
		 'ngay_vao_lam.required'=>'required',
			'muc_luong_cb'=>'required',
			'phu_cap'=>'required',
			'he_so'=>'required',
			'phong_ban_id'=>'required',
			'chuc_vu_id'=>'required',
			'cong_viec_id'=>'required',
			'bang_cap_id'=>'required'
		];
	}

}
