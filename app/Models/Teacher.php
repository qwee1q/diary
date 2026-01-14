<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    //rows
    protected $fillable = [
        'name',
        'second_name',
        'email',
        'phone',
        'gender',
        'age',
        'subject'
    ];
}
