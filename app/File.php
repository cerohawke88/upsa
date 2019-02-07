<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    protected $fillable = ['name_id', 'title', 'filename'];

    public function user()
	{
		return $this->belongsTo('App\PersonalDetails');
	}

	public function scopeOfPersonalDetails($query, PersonalDetails $pd) {
		return $query->where('name_id', $pd->id);
	}
}
