<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class ChucvuRequest extends Request {

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
			'chuc_vu_id'=>'required',
			'ten_chuc_vu'=>'required'
		];
	}
	public function messages(){
		return[
			'chuc_vu_id.required'=>'please put chuc vu id',
			'ten_chuc_vu.required'=>'please put ten chuc vu'
		];
	}

}
