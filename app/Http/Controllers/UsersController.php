<?php

namespace App\Http\Controllers;
use App\Http\Requests\UserRequest;
use App\Models\User;

class UsersController extends Controller {

	public function show(User $user) {
		$students = $user->students;
		$prictices = $user->prictice()
			->orderBy('created_time', 'desc')
			->paginate(20);
		return view('users.show', compact('user', 'students', 'prictices'));
	}
	public function login() {
		return view('users.login');

	}
	public function check(UserRequest $request) {
		dd($request->all());
		return redirect()->route('user.show')->with('success', '登录成功');
	}
}
