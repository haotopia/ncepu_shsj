<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy {
	use HandlesAuthorization;

	public function update(User $currentUser, User $user) {
		return $currentUser->stu_id === $user->stu_id;
	}
}