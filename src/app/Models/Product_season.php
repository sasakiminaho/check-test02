<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product_season extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'season_id'
    ];

    public function product() {
        return $this->belongTo('App\Model\Product');
    }

    public function season() {
        return $this->belongTo('App\Model\Season');
    }
}
