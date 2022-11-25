<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarModels extends Model
{
    use HasFactory;


    protected $table = 'car_models';
    protected $fillable = [
        'name','brand_id'
    ];

}
