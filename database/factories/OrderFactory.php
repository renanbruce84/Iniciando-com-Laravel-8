<?php

namespace Database\Factories;

use App\Models\Order;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Order::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::factory(), // Criando um usuário na execução da seed de Order
            'items' => 'items-' . rand(1, 100),
            'reference' => 'x-' . rand(1, 100)
        ];
    }

    public function isPaid()
    {
        return $this->state(['status' => 'PAGO']);
    }

    
}
