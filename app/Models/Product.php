<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table ='products';

    protected $fillable = [
        'category_id',
        'brand_id',
        'name',
        'description',
        'price',
        'image_path',
        'qty',
        'alert_stock',
    ];

    public function category()
    {
        return $this->belongsTo(category::class);
    }

    public function brand()
    {
        return $this->belongsTo(brand::class);
    }

    public function getImagePath()
    {
        return env('DOMAIN_URL') . Storage::url($this->image_path);
    }
}
