<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UploadFileAdmin extends Model
{
    protected $fillable = ['course_id', 'filename','path'];
}
