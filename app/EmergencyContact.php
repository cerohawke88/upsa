<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmergencyContact extends Model
{
    protected $table = 'emergency_contact';
    protected $guarded = ['id'];

    public function user()
	{
		return $this->belongsTo('App\PersonalDetails');
	}
}
