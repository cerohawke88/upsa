<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OutGuardianParent extends Model
{
    protected $table = 'out_guardian_contact';
    protected $fillable = ['nameOut_id', 'fullname','relationship', 'address', 'phone', 'mobile', 'email'];
    public $incrementing = false;
    
    public function user()
	{
		return $this->belongsTo('App\OutPersonalDetails');
	}
}
