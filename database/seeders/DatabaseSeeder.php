<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Stripe\Review;

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
            NewsTableSeeder::class,
            UsersTableSeeder::class,
            TagsTableSeeder::class,
            UsersTagsTableSeeder::class,
            ReservationsTableSeeder::class,
            ReviewsTableSeeder::class,
            ImagesTableSeeder::class,
        ]);
    }
}
