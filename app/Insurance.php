<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Insurance extends Model
{
    protected $table = 'insurance';
    protected $fillable = ['name_id', 'insurance_name','validity','cover'];
    public $incrementing = false;

    public function user()
	{
		return $this->belongsTo('App\PersonalDetails');
	}
}
