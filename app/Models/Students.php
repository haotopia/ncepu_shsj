<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Students extends Model {
	protected $primaryKey = 'stu_id';
	protected $table = 'students';

	protected $fillable = [
		'stu_id', 'stu_name', 'stu_class', 'stu_major',
	];

	public function user() {
		return $this->belongsTo(User::class);
	}
}