<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PengarangFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama' => $this->faker->name(),
            'alamat' => $this->faker->sentence(mt_rand(5, 10)),
            'no_telp' => $this->faker->phoneNumber(),
            'tgl_lahir' => $this->faker->date()
        ];
    }
}
