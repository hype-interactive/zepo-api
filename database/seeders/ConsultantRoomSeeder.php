<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ConsultantRoom;

class ConsultantRoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ConsultantRoom::factory()
            ->count(50)
            ->create();
    }
}
