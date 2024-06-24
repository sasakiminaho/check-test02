<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
        'image',
        'description'
    ];


    public function seasons() {
        return $this->belongsToMany('App\Models\Season')->withPivot('name');
    }

    public function product_season() {
        return $this->hasMany('App\Models\Product_season');
    }
}
