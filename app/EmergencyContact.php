<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmergencyContact extends Model
{
    protected $table = 'emergency_contact';
    protected $fillable = ['name_id', 'fullname','relationship','address','phone','mobile','email'];
    public $incrementing = false;

    public function user()
	{
		return $this->belongsTo('App\PersonalDetails');
	}
}
