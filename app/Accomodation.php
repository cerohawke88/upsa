<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Accomodation extends Model
{
    protected $table = 'accomodation';
    protected $fillable = ['name_id', 'accomodation_help','address','contact_person'];
    public $incrementing = false;
    
    public function user()
	{
		return $this->belongsTo('App\PersonalDetails');
	}
}
