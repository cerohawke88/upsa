<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OutAcademicInfo extends Model
{
    protected $table = 'out_academic_info';
    protected $fillable = ['name_id', 'department','semester', 'gpa', 'english_score', 'date_test_english'];
    public $incrementing = false;
    
    public function user()
	{
		return $this->belongsTo('App\OutPersonalDetails');
	}
}
