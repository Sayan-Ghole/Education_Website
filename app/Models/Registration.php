<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Registration extends Authenticatable
{
    
    protected $table = "registration";
     protected $primaryKey = 'ph_no';
    
    protected $fillable = [
        'name', 'email', 'password'
    ];
}
