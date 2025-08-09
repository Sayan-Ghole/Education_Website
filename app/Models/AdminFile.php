<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdminFile extends Model
{
    protected $table = "upload_file_admins";
    protected $fillable = ['course_id', 'filename','path'];
}
