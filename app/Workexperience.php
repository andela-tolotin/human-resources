<?php

namespace HumanResources;

use Illuminate\Database\Eloquent\Model;

class Workexperience extends Model
{
    protected $fillable = [
        'user_id',
        'company',
        'position',
        'job-description',
        'start-date',
        'end-date',
    ];
}