<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseDetails extends Model
{
    use HasFactory;
    protected $table = 'course_details';
    protected $fillable = [
       'id','courseName','university_id',
   ];
    
}
