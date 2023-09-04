<?php

namespace Database\Factories;

use App\Models\Dog;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class DogFactory extends Factory
{
    protected $model = Dog::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'breed' => $this->faker->word(),
            'age' => $this->faker->word(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
