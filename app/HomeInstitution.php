<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HomeInstitution extends Model
{
    protected $table = 'home_institution';
    protected $fillable = ['name_id','name','address','phone','email','website','faculty_dep','start_year','gpa'];
    public $incrementing = false;

    public function user()
	{
		return $this->belongsTo('App\PersonalDetails');
	}
}
