<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SessionMessage;

class SessionMessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SessionMessage::factory()
            ->count(200)
            ->create();
    }
}
