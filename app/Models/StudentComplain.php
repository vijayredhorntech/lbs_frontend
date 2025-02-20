<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudentComplain extends Model
{
    protected $table = 'student_complains';

    protected $fillable = [
        'name',
        'class',
        'roll_number',
        'phone_number',
        'email',
        'message',
    ];
}
