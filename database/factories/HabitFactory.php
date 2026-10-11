<?php

namespace Database\Factories;

use App\Models\habit;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<habit>
 */
class HabitFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $habits = [
            'Estudar',
            'Treinar',
            'Comer'
        ];

        return [
            'user_id' => '1',
            'name' => $this->faker->unique()->randomElement($habits)
        ];
    }
}
