<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PersonalDetails extends Model
{
    protected $table = 'personal_details';
    protected $guarded = ['id'];

    public function accomodation()
	{
		return $this->hasOne('App\Accomodation');
	}

	public function course()
	{
		return $this->hasOne('App\Course');
	}

	public function proposedStudy()
	{
		return $this->hasOne('App\ProposedStudy');
	}

	public function emergencyContact()
	{
		return $this->hasOne('App\EmergencyContact');
	}

	public function englishTestResult()
	{
		return $this->hasOne('App\EnglishTestResult');
	}

	public function homeInstitution()
	{
		return $this->hasOne('App\HomeInstitution');
	}

	public function insurance()
	{
		return $this->hasOne('App\Insurance');
	}
}
