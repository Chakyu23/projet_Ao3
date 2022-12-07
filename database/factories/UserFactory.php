<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $rank = ["admin", "moderator", "user"];

        return [
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),

            'bio' => fake()->text(),
            'show_email' => random_int(0, 1),
            'birthdate' => fake()->date(),
            'show_birthdate' => random_int(0, 1),
            'hide_warning' => random_int(0, 1),
            'hide_tag' => random_int(0, 1),
            'comment_notification' => random_int(0, 1),
            'mailbox_notification' => random_int(0, 1),
            'like_notification' => random_int(0, 1),
            'allow_external_collection' => random_int(0, 1),
            'allow_gift' => random_int(0, 1),
            'gift_notification' => random_int(0, 1),
            'allow_history' => random_int(0, 1),
            'rank' => $rank[random_int(0,2)]

        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
