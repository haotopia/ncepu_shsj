<?php

namespace App\Http\Controllers;
use App\Http\Requests\UserRequest;
use App\Models\User;

class UsersController extends Controller {

	public function show(User $user) {

		return view('users.show', compact('user'));
	}
	public function login() {
		return view('users.login');

	}
	public function check(UserRequest $request) {
		dd($request->all());
		return redirect()->route('user.show')->with('success', '登录成功');
	}
}
