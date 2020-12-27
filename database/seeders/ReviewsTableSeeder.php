<?php

namespace Database\Seeders;

use App\Models\User;
use DateTime;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReviewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    $param = [
        'rating' => 3.5,
        'review_text' => 'よかったです。',
        'reservation_id' => '1',
        "created_at" => new DateTime(),
        "updated_at" => new DateTime(),
    ];
        DB::table("reviews")->insert($param);
    }
}
