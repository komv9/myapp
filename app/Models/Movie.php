<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
	public function users() {

		return $this->belongsToMany(User::class);
	}

	public function userratings() {

		return $this->hasMany(Userrating::class);
	}

	public function tuserratings() {

		return $this->belongsToMany(User::class);
		//hasOne can also be used
	}






}

