<?php

namespace Database\Seeders;

use App\Models\Ingredient;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ingredients extends Seeder
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
                'name' => 'Beef',
                'stock' => '20000'
            ],

            [
                'name' => 'Cheese',
                'stock' => '5000'
            ],

            [
                'name' => 'Onion',
                'stock' => '1000'
            ],
        ];

        foreach ($data as $row){
            Ingredient::create([
                'name' => $row['name'],
                'stock' => $row['stock']
            ]);
        }

    }
}
