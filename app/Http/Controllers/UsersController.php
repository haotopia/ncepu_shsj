<?php

namespace App\Http\Controllers;
use App\Http\Requests\UserRequest;

class UsersController extends Controller {

	public function show() {
		return view('users.show', compact('user'));
	}
	public function login() {
		return view('users.login');

	}
	public function check(UserRequest $request) {

		return redirect()->route('user.show')->with('success', '登录成功');
	}
}
