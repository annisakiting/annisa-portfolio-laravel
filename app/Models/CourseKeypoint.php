<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CourseKeypoint extends Model
{
    use HasFactory, softDeletes;

    protected $fillable =[
        'name',
        'course_id'
    ];
    //
}
