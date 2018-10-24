<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProposedStudy extends Model
{
    protected $table = 'proposed_study';
    protected $guarded = ['id'];

    public function user()
	{
		return $this->belongsTo('App\PersonalDetails');
	}
}
