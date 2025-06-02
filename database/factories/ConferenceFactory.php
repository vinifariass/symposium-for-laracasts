<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Conference>
 */
class ConferenceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $startsAt = now()->addMonths(6);
        $endsAt = $startsAt->clone()->addDays(3);
        $cfpStartsAt = $startsAt->clone()->subMonths(4);
        $cpfEndsAt = $cfpStartsAt->clone()->addMonths(2);

        return [
            'title' => fake()->sentence(),
            'description' => fake()->paragraph(),
            'location' => fake()->city() . ', ' . fake()->country(),
            'url' => fake()->url(),
            'starts_at' => $startsAt,
            'ends_at' => $endsAt,
            'cfp_starts_at' => $cfpStartsAt,
            'cfp_ends_at' => $cpfEndsAt,
        ];
    }
}
