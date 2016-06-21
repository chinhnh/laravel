<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class PhongbanRequest extends Request {

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
			'phong_ban_id'=>'required',
			'ten_phong_ban'=>'required'
		];
	}
	public function messages(){
		return[
			'phong_ban_id.required'=>'please put phong ban id',
			'ten_phong_ban.required'=>'please put ten phong ban'
		];
	}

}
