<?php

namespace Database\Seeders;

use App\Models\Order;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(4)
        //     ->has(Order::factory())
        //     ->create();
        
        // \App\Models\User::factory(1)
        //     ->has(Order::factory(3)) // utilizar o has sempre do lado que tem muitos
        //     ->create();
        
        \App\Models\User::factory(1)
            ->hasOrders(3) // O laravel buscará o orders que está dentro do método do model User
            ->create();
    }
}
