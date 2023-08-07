<?php

namespace Database\Factories;


use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Paciente>
 */
class PacienteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
//        $faker = \Faker\Factory::create('pt_BR');

        return [
            'nome' => $this->faker->name,
            'cpf' => $this->faker->cpf,
            'celular' => $this->faker->phoneNumber,
        ];
    }
}
