<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OutOrganization extends Model
{
    protected $table = 'out_organization';
    protected $fillable = ['name_id', 'name_org', 'year_org'];
    public $incrementing = false;
    
    public function user()
	{
		return $this->belongsTo('App\OutPersonalDetails');
	}
}
