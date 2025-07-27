<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TopicAdmin extends Model
{
    protected $fillable = [
        'course_id',
        'title',
        'description'
    ];
}
