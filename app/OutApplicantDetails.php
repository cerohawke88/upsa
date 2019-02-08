<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OutApplicantDetails extends Model
{
    protected $table = 'out_application_details';
    protected $fillable = ['nameOut_id', 'type_program','program_period', 'host_univ'];
    public $incrementing = false;
    
    public function user()
	{
		return $this->belongsTo('App\OutPersonalDetails');
	}
}
