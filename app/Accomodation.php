<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Accomodation extends Model
{
    protected $table = 'accomodation';
    protected $guarded = ['id'];

    public function user()
	{
		return $this->belongsTo('App\PersonalDetails');
	}
}
