<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PersonalDetails extends Model
{
    protected $table = 'personal_details';
    protected $guarded = ['id'];
    // protected $fillable = [
	// 	'fullname', 'nationality', 'date_of_birth','passport_number','issuing_country','date_of_issue',
	// 	'date_of_expiry','blood_type','marital_status','address','city','postal_code','province','country',
	// 	'phone','mobile','email','address2','city2','postal_code2','province2','country2','phone2','contact_name'
		
	// ];
	
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
