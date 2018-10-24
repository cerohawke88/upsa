<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EnglishTestResult extends Model
{
    protected $table = 'english_test_result';
    protected $guarded = ['id'];

    public function user()
	{
		return $this->belongsTo('App\PersonalDetails');
	}
}
