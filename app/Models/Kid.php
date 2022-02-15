<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kid extends Model
{
	public function hobbies() {

		return $this->belongsToMany(Hobby::class);
	}
}

