<?php

namespace App\Models;

use App\Notifications\ResetPassword;
use Illuminate\Database\Eloquent\Model;

class User extends Model {
	public function sendPasswordResetNotification($token) {
		$this->notify(new ResetPassword($token));
	}
}
