<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
	public function city() {

		return $this->belongsTo('App\Models\City');
	}
}

