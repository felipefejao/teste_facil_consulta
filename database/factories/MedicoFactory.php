<?php

namespace Database\Factories;

use App\Models\Cidade;
use App\Models\Medico;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Medico>
 */
class MedicoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nome' => $this->faker->name,
            'cidade_id' => (Cidade::factory()->create())->id,
            'especialidade' => Medico::ESPECIALIDADE[ $this->faker->numberBetween(0, count(Medico::ESPECIALIDADE)-1 ) ],
        ];
    }
}
