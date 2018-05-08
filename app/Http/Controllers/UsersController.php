<?php

namespace App\Http\Controllers;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Auth;

class UsersController extends Controller {

	public function __construct() {

		$this->middleware('auth', ['except' => ['login', 'check']]);

	}
	public function show(User $user) {
		$this->authorize('update', $user);
		$students = $user->students;
		$prictices = $user->prictice()
			->orderBy('created_time', 'desc')
			->paginate(20);
		return view('users.show', compact('user', 'students', 'prictices'));
	}
	public function login() {
		if (Auth::id()) {
			return redirect()->route('users.show', Auth::id());
		}
		return view('users.login');

	}
	public function check(UserRequest $request) {
		return redirect()->route('users.show', Auth::id())->with('success', '登录成功');
	}
	public function showcheck() {
		if (Auth::id()) {
			return redirect()->route('users.show', Auth::id());
		}
		return view('users.login');

	}
}
