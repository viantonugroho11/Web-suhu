<?php

namespace Database\Factories;

use App\Models\Suhu;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class SuhusFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Suhu::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Kode_Area' => $this->faker->Kode_Area(),
            'Nilai_Suhu' => $this->faker->unique()->Nilai_Suhu(),
            'remember_token' => Str::random(10),
        ];
    }
}
