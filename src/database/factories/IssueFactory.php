<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Issue;

class IssueFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            Issue::TITLE => $this->faker->sentence,
            Issue::DESCRIPTION => $this->faker->sentence,
        ];
    }
}
