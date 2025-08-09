<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{   
     protected $table = 'course_admins';
     protected $fillable = [
        'title',
        'description'
    ];
}
