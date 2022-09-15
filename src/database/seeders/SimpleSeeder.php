<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Issue;
use App\Models\Comment;

/**
 * Class SimpleSeeder
 * @package Database\Seeders
 */
class SimpleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()
            ->has(
                Issue::factory()
                    ->for(User::factory(), 'assignee')
                    ->has(
                        Comment::factory()
                            ->for(User::factory(), 'author')
                            ->count(3)
                    )
                    ->count(5)
            )
            ->count(10)
            ->create();
    }
}
