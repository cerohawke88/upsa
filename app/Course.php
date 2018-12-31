<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table = 'course';
    protected $fillable = ['name_id', 'course_title','credit'];
    public $incrementing = false;

    public function user()
	{
		return $this->belongsTo('App\PersonalDetails');
	}

}
