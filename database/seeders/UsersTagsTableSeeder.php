<?php

namespace Database\Seeders;

use App\Models\Tag;
use App\Models\User;
use DateTime;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'user_id' => User::where('email','user3@test.com')->first()->id,
            'tag_id' => Tag::where('tag','3Dモデリング')->first()->id,
            "created_at" => new DateTime(),
            "updated_at" => new DateTime()
        ];
        DB::table("user_tag")->insert($param);

        $param = [
            'user_id' => User::where('email','user3@test.com')->first()->id,
            'tag_id' => Tag::where('tag','キャラクターデザイン')->first()->id,
            "created_at" => new DateTime(),
            "updated_at" => new DateTime()
        ];
        DB::table("user_tag")->insert($param);
    }
}
