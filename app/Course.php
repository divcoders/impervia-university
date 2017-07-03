<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    //
	public $timestamps = true;
	protected $table = 'courses';
	public function categories(){
		return $this->belongsToMany('App\Category');
	}
	public function sections(){
		return $this->hasMany('App\Section');
	}
	public function users(){
		return $this->belongsToMany('App\User');
	}
}
