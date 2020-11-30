<?php

namespace Database\Seeders;

use App\Models\User;
use DateTime;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReservationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'sensei_id' =>User::where('email','user3@test.com')->first()->id,
            'seito_id' =>User::where('email','user2@test.com')->first()->id,
            'schedule' =>'2020-12-01 15:00:00',
            'hour' => 1.5,
            "created_at" => new DateTime(),
            "updated_at" => new DateTime(),
            'rating' => 3.5,
            'review_text' => 'よかったです。'
        ];
        DB::table("reservation")->insert($param);

        $param = [
            'sensei_id' =>User::where('email','user3@test.com')->first()->id,
            'seito_id' =>User::where('email','user@test.com')->first()->id,
            'schedule' =>'2020-12-01 18:00:00',
            'hour' => 1.5,
            "created_at" => new DateTime(),
            "updated_at" => new DateTime(),
            'rating' => 3.5,
            'review_text' => 'よかったです。'
        ];
        DB::table("reservation")->insert($param);
    }
}
