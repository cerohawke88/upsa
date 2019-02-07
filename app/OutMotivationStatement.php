<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OutMotivationStatement extends Model
{
    protected $table = 'out_motivation';
    protected $fillable = ['name_id', 'text'];
    public $incrementing = false;
    
    public function user()
	{
		return $this->belongsTo('App\OutPersonalDetails');
	}
}
