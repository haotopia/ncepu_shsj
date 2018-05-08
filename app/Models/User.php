<?php

namespace App\Models;

use App\Notifications\ResetPassword;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable {
	use Notifiable;

	protected $primaryKey = 'stu_id';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'stu_id', 'password', 'email',
	];

	/**
	 * The attributes that should be hidden for arrays.
	 *
	 * @var array
	 */
	protected $hidden = [
		'password', 'remember_token',
	];

	public function sendPasswordResetNotification($token) {
		$this->notify(new ResetPassword($token));
	}
	public function students() {
		return $this->hasOne(Students::class, 'stu_id');
	}
	public function prictice() {
		return $this->hasMany(Prictice::class, 'stu_id');
	}
}
