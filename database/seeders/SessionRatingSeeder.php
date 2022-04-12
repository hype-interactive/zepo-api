<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SessionRating;

class SessionRatingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SessionRating::factory()
            ->count(30)
            ->create();
    }
}
