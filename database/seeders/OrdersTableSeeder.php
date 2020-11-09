<?php

namespace Database\Seeders;

use App\Models\Order;
use App\Models\User;
use Illuminate\Database\Seeder;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Order::factory(2)->create();

        // Order::factory(1)
        //     ->for(User::factory()) // Sempre utilizar do lado que tem um
        //     ->create();

        // Order::factory(1)
        //     ->forUser() // O laravel buscará o user que esta dentro do método do Model Order
        //     ->create();

        // Order::factory(1)
        //     ->state([
        //         'status' => 'CONCLUIDO'
        //     ]) // state -> Sobrescreve o valor do atributo em tempo de geração
        //     ->forUser() // O laravel buscará o user que esta dentro do método do Model Order
        //     ->create();

        Order::factory(1)
            ->isPaid() // Método criado em OrderFactoty Sobrescreve o valor do atributo em tempo de geração
            ->forUser() // O laravel buscará o user que esta dentro do método do Model Order
            ->create();
    }
}
