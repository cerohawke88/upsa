<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProposedStudy extends Model
{
    protected $table = 'proposed_study';
    protected $fillable = ['name_id', 'semester','academic_year','faculty','department','study_period','start_date','end_date'];
    public $incrementing = false;

    public function user()
	{
		return $this->belongsTo('App\PersonalDetails');
	}
}
