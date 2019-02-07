<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OutPersonalDetails extends Model
{
  protected $table = 'out_personal_details';
    protected $guarded = ['id'];

	public function outAcademic()
	{
		return $this->hasOne('App\OutAcademicInfo', 'nameOut_id');
	}

	public function outApplicantDetails()
	{
		return $this->hasOne('App\OutApplicantDetails', 'nameOut_id');
	}

	public function outContact()
	{
		return $this->hasOne('App\OutContact', 'nameOut_id');
	}

	public function outCourse()
	{
		return $this->hasOne('App\OutCourse', 'nameOut_id');
	}

	public function outGuardianParent()
	{
		return $this->hasOne('App\OutGuardianParent', 'nameOut_id');
	}

	public function outMotivationStatement()
	{
		return $this->hasOne('App\OutMotivationStatement', 'nameOut_id');
	}

	public function outOrganization()
	{
<<<<<<< HEAD
		return $this->hasOne('App\OutOrganization', 'nameOut_id');
	}

	public function outStudentAward()
	{
		return $this->hasOne('App\outStudentAward', 'nameOut_id');
=======
		return $this->hasMany('App\OutOrganization', 'nameOut_id');
>>>>>>> 2990478f3a1902e7c334e74d4e7aef2895f4deae
	}

	public function outFiles()
	{
<<<<<<< HEAD
		return $this->hasMany('App\outFile', 'nameOut_id');
=======
		return $this->hasMany('App\outStudentAward', 'nameOut_id');
>>>>>>> 2990478f3a1902e7c334e74d4e7aef2895f4deae
	}
}
