<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PersonalDetails extends Model
{
    protected $table = 'personal_details';
    protected $guarded = ['id'];
}
