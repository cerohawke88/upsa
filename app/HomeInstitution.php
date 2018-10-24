<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HomeInstitution extends Model
{
    protected $table = 'home_institution';
    protected $guarded = ['id'];

    public function user()
	{
		return $this->belongsTo('App\PersonalDetails');
	}
}
