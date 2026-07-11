<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactEnquiry extends Model
{
    protected $fillable = [
        'name',
        'mobile',
        'email',
        'course_duration',
        'message',
        'status',
    ];
}