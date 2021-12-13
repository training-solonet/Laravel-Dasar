<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BukuFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'judul' => $this->faker->sentence(mt_rand(2, 5)),
            'tahun_terbit' => $this->faker->year(),
            'penerbit' => $this->faker->name(),
            'id_pengarang' => mt_rand(1, 3)
        ];
    }
}
