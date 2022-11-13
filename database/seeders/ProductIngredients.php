<?php

namespace Database\Seeders;

use App\Models\ProductIngredient;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductIngredients extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'product_id' => 1,
                'ingredient_id' => 1,
                'amount' => '150'
            ],

            [
                'product_id' => 1,
                'ingredient_id' => 2,
                'amount' => '30'
            ],

            [
                'product_id' => 1,
                'ingredient_id' => 3,
                'amount' => '20'
            ],
        ];

        //we could use this code in case to ignore the n+1 problem case ,but we will face a problem with timestamps
        //Ingredient::insert($data);
        foreach ($data as $row)
        {
            ProductIngredient::create([
                'product_id' => $row['product_id'],
                'ingredient_id' => $row['ingredient_id'],
                'amount' => $row['amount']
            ]);
        }
    }
}
