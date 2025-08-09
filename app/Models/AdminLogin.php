<?php

namespace App\Models;
use Illuminate\Foundation\Auth\User as Authenticatable; 

class AdminLogin extends Authenticatable
{
    
    protected $primaryKey = 'id';
    protected $table = "admin__logins";
     protected $fillable = [
        'name',
        'password',
    ];
}
