<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table = 'course';
    // protected $guarded = ['id'];
    public $incrementing = false;

    public function user()
	{
		return $this->belongsTo('App\PersonalDetails');
	}

	public function study() {
		return $this->belongsTo('App\ProposedStudy', 'no');
	}

}
