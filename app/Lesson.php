<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    //
	public $timestamps = true;
	protected $table = 'lessons';
	public function Section(){
		return $this->belongsTo('App\Section');
	}
}
