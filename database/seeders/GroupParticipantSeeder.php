<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\GroupParticipant;


class GroupParticipantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        GroupParticipant::factory()
            ->count(20)
            ->create();
    }
}
