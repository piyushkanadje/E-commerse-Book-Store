<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UniversityDetails extends Model
{
    use HasFactory;
    protected $table = 'university_details';
    protected $fillable = [
       'id','universityName'
   ];
}
