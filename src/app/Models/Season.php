<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Season extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public function products() {
        return $this->belongsToMany('App\Models\Product');
    }

    public function product_season() {
        return $this->hasMany('App\Models\Product_season');
    }
}
