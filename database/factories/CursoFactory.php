<?php

namespace Database\Factories;

use App\Models\Curso;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Curso>
 */
class CursoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $curso = Curso::class;
    public function definition(): array
    {
        return [
            'nombre'=>$this->faker->sentence(),
            'codigo'=>$this->faker->paragraph(),
            'categoria'=>$this->faker->randomElement(['hola','hola2']),
        ];
    }
}
