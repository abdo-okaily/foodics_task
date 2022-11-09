<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class prdouct_Ingredient extends Model
{
    use HasFactory;

    public function products()
    {
        return $this->hasMany(product::class,'product_id');
    }

    public function ingredients()
    {
        return $this->hasMany(Ingredient::class,'ingredient_id');
    }
}
