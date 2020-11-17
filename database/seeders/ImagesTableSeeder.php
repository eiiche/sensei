<?php

namespace Database\Seeders;

use App\Models\User;
use DateTime;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'image' => "/img/1.png",
            'user_id' => User::where('email','user3@test.com')->first()->id,
            "created_at" => new DateTime(),
            "updated_at" => new DateTime()
        ];
        DB::table("images")->insert($param);

        $param = [
            'image' => "/img/2.png",
            'user_id' => User::where('email','user3@test.com')->first()->id,
            "created_at" => new DateTime(),
            "updated_at" => new DateTime()
        ];
        DB::table("images")->insert($param);
    }
}
