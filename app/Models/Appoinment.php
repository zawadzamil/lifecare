<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appoinment extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'department_id',
        'doctor_id',
        'date',
        'time',
        'user_name',
        'user_phone',
        'message',
    ];
}
