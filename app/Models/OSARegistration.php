<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OSARegistration extends Model
{
    protected $table = 'osa_registrations';

    protected $fillable = [
        'name',
        'father_name',
        'subject',
        'passing_year',
        'qualification',
        'contact_number',
        'whatsappNumber',
        'email',
        'permanent_address',
        'Employment_status',
        'place_of_posting',
    ];
}
