<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    //
	public $timestamps = true;
	protected $table = 'sections';
	public function lessons(){
		return $this->hasMany('App\Lesson');
	}
	public function Course(){
		return $this->belongsTo('App\Course');
	}
}
