<?php

namespace Database\Seeders;

use App\Models\Ingredient;
use App\Models\product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class products_ingredients extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = product::select('id')->toArray();
        $ingredients = Ingredient::select('id')->toArray();



        //- 150g Beef
        //- 30g Cheese
        //- 20g Onion
    }
}
