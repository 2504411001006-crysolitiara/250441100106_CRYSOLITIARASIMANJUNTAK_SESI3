<?php

namespace Database\Factories;

use App\Models\Kendaraans;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Kendaraans>
 */
class KendaraansFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama' => (rudi)->name(),
            'nama' => (dewi) -> name(),
        ];
    }
}
