<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable; 

class ManagerLogin extends Authenticatable
{
    protected $table = "managers";
    protected $primaryKey = "userid";

    protected $fillable = [
        "userid" ,
        'name',
        'password',
    ];
}
