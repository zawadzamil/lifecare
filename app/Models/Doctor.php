<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'image',
        'type',
        'degree',
        'address',
        'phone',
        'email',
        'description',
        'department_id',

    ];
}
