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
                'id' => 1,
                'name' => 'Beef',
                'stock' => '20000'
            ],

            [
                'id' => 2,
                'name' => 'Cheese',
                'stock' => '5000'
            ],

            [
                'id' => 3,
                'name' => 'Onion',
                'stock' => '1000'
            ],
        ];
        //we could use this code in case to ignore the n+1 problem case ,but we will face a problem with timestamps
        //Ingredient::insert($data);
        foreach ($data as $row){
            Ingredient::create([
                'id' => $row['id'],
                'name' => $row['name'],
                'stock' => $row['stock']
            ]);
        }

    }
}
