<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $table = 'books';
    protected $fillable = [
        'user_id',
        'appointment_type',
        'brand',
        'model',
        'kilometers',
        'car_number',
        'appointment_date',
        'appointment_time',
        'service_name',
        'service_price',
        'service_custom_message',
    ];
    public function user()
    {
        return $this->belongsTo('App\Models\User','user_id','id');
    }
    public function brands()
    {
        return $this->belongsTo('App\Models\Brands','brand','id');
    }
    public function models()
    {
        return $this->belongsTo('App\Models\CarModels','model','id');
    }
}
