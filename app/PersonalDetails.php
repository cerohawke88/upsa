<?php

namespace App;

use Storage;
use Illuminate\Database\Eloquent\Model;

class PersonalDetails extends Model
{
    protected $table = 'personal_details';
	protected $guarded = ['id'];
	protected $appends = ['avatar'];
    
	
    public function accomodation()
	{
		return $this->hasOne('App\Accomodation', 'name_id');
	}

	public function course()
	{
		return $this->hasMany('App\Course', 'name_id');
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
		return $this->hasMany('App\EnglishTestResult', 'name_id');
	}

	public function homeInstitution()
	{
		return $this->hasOne('App\HomeInstitution', 'name_id');
	}

	public function insurance()
	{
		return $this->hasOne('App\Insurance', 'name_id');
	}

	public function files()
	{
		return $this->hasMany('App\File', 'name_id');
	}

	public function getAvatarAttribute()
	{
		return Storage::url($this->files()->where('title', 'LIKE', '%.jpg')
			->orWhere('title', 'LIKE', '%.jpeg')
			->orWhere('title', 'LIKE', '%.png')->first()->filename);
	}
}
