<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
	public function skills() {

		return $this->belongsToMany(Skill::class);
	}
}

