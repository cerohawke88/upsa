<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Insurance extends Model
{
    protected $table = 'insurance';
    protected $guarded = ['id'];

    public function user()
	{
		return $this->belongsTo('App\PersonalDetails');
	}
}
