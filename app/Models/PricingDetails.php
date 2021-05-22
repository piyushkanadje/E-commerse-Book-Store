<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PricingDetails extends Model
{
    use HasFactory;
    protected $table = 'pricing_details';
    protected $fillable = [
       'id','universityName','courseName','price'
   ];
   
}
