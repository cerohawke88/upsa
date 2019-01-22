<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PersonalDetails extends Model
{
    protected $table = 'personal_details';
    protected $guarded = ['id'];
    
	
    public function accomodation()
	{
		return $this->hasOne('App\Accomodation', 'name_id');
	}

	public function course()
	{
		return $this->hasOne('App\Course', 'name_id');
	}

	public function proposedStudy()
	{
		return $this->hasOne('App\ProposedStudy', 'name_id');
	}

	public function emergencyContact()
	{
		return $this->hasOne('App\EmergencyContact', 'name_id');
	}

	public function englishTestResult()
	{
		return $this->hasOne('App\EnglishTestResult', 'name_id');
	}

	public function homeInstitution()
	{
		return $this->hasOne('App\HomeInstitution', 'name_id');
	}

	public function insurance()
	{
		return $this->hasOne('App\Insurance', 'name_id');
	}
}
