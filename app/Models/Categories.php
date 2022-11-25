<?php

namespace App\Models;

use App\Models\Services;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    use HasFactory;

    protected $table = 'categories';
    protected $fillable = [
        'name',
        'categories_image',
    ];

    public function services()
    {
        return $this->hasMany(Services::class, 'categories_id', 'id');
    }

}
