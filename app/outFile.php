<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class outFile extends Model
{
 	 protected $fillable = ['nameOut_id', 'title', 'filename'];

    public function user()
	{
		return $this->belongsTo('App\OutPersonalDetails');
	}

	public function scopeOfPersonalDetails($query, OutPersonalDetails $pd) {
		return $query->where('nameOut_id', $pd->id);
	}   
}
