<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OutCourse extends Model
{
    protected $table = 'out_course';
    protected $fillable = ['nameOut_id', 'course_title', 'credit'];
    public $incrementing = false;
    
    public function user()
	{
		return $this->belongsTo('App\OutPersonalDetails');
	}
}
