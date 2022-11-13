<?php
    namespace Database\Seeders;

    use Illuminate\Database\Seeder;
    use App\Models\User;

    class DatabaseSeeder extends Seeder
    {
        /**
         * Seed the application's database.
         *
         * @return void
         */
        public function run()
        {
            //sample client user for making order
            User::factory()->create([
                'name' => 'Client User',
                'email' => 'client@example.com',
                'type' => 'client'
            ]);
            //sample vendor user for getting notify in case there is a shortage in the Ingredients stocks
            User::factory()->create([
                'name' => 'Vendor User',
                'email' => 'vendor@example.com',
                'type' => 'vendor'
            ]);
            //default seeder for the Task
            $this->call([
                products::class,
                ingredients::class,
                ProductIngredients::class,
            ]);
        }
    }
