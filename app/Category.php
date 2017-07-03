<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
	public $timestamps = true;
	protected $table = 'categories';
	public function courses(){
		return $this->belongsToMany('App\Course');
	}
	public function parent(){
		return $this->belongsTo(self::class, 'parent_id');
	}
	public function childrens(){
		return $this->hasMany(self::class, 'parent_id');
	}
}
