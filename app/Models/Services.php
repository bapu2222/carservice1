<?php

namespace App\Models;

use App\Models\Categories;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $table = 'services';
    public $fillable = [
        'name',
        'description',
        'categories_id',
        'price',
        'categories_image',
    ];

    public function cate_name()
    {
        return $this->belongsTo(Categories::class, 'categories_id', 'id');
    }

}
