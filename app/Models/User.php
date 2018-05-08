<?php

namespace App\Models;

use App\Notifications\ResetPassword;
use Illuminate\Database\Eloquent\Model;

class User extends Model {
	protected $primaryKey = 'stu_id';
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
