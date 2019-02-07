<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OutContact extends Model
{
    protected $table = 'out_contact_info';
    protected $fillable = ['name_id', 'email','mobile', 'telp', 'address'];
    public $incrementing = false;
    
    public function user()
	{
		return $this->belongsTo('App\OutPersonalDetails');
	}
}
