<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\Storage;

class Brand extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image_path'
    ];

    public function getImagePath()
    {
        return env('DOMAIN_URL') . Storage::url($this->image_path);
    }
}
