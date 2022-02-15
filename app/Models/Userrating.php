<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Userrating extends Model
{
	public function user() {

		return $this->belongsTo(User::class);
		//hasOne can also be used
	}

	public function movie() {
		return $this->belongsTo(Movie::class);
	}

}

