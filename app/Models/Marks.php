<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Marks extends Model
{
    //rows
    protected $fillable = [
        'student_id',
        'teacher_id',
        'subject',
        'mark',
        'teacher_name',
        'theme',
        'date'];
}
