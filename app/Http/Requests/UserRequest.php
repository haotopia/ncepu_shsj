<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Auth;

class UserRequest extends FormRequest {
	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize() {
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules() {
		return [
			'stu_id' => 'required' ,
			'password' => 'required',
		];
	}
    public function messages(){
        'stu_id.required'   =>  '学号不能为空。',
        'password.required' =>  '密码不能为空',
    }
}
