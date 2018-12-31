<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EnglishTestResult extends Model
{
    protected $table = 'english_test_result';
    protected $fillable = ['name_id', 'test','score','test_center','date_tested'];
    public $incrementing = false;

    public function user()
	{
		return $this->belongsTo('App\PersonalDetails');
	}
}
