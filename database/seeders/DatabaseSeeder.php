<?php

namespace Database\Seeders;

use App\Models\GroupParticipant;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            
            RoleSeeder::class,
            UserSeeder::class,
            PostSeeder::class,
            PostCommentSeeder::class,
            RoomSeeder::class,
            ConsultantRoomSeeder::class,
            SessionSeeder::class,
            SessionMessageSeeder::class,
            SessionRatingSeeder::class,
            SubscriptionPlanSeeder::class,
            OrderSeeder::class,
            PaymentSeeder::class,
            SubscriptionSeeder::class,
            GroupSeeder::class,
            GroupParticipantSeeder::class,
            ArticleSeeder::class,
            ArticleCommentSeeder::class                                                                                                        


        ]);
    }
}
