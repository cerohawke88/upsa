<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OutStudentAward extends Model
{
    protected $table = 'out_award';
    protected $fillable = ['nameOut_id', 'name_award', 'name_institution', 'year_award'];
    public $incrementing = false;
    
    public function user()
	{
		return $this->belongsTo('App\OutPersonalDetails');
	}
}
