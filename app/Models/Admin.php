<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $fillable = [
        'name', 'email', 'phone_number', 'password', 'role',
    ];

    protected $hidden = ['password'];
}
