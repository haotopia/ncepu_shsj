<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Prictice extends Model {
	protected $table = 'prictices';
	protected $fillable = [
		'name', 'created_time',
	];

	public function user() {
		return $this->belogsTo(User::class);
	}
}
