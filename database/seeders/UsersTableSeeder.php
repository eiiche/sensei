<?php

namespace Database\Seeders;

use App\Models\Reservation;
use DateTime;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => "user1",
            'email' => 'user@test.com',
            'password' => Hash::make('usertest'),//パスワードはハッシュ化
            'icon' => '/storage/1.png',
            'profile_text' => 'プロフィールです',
            "created_at" => new DateTime(),
            "updated_at" => new DateTime()
        ];
        DB::table("users")->insert($param);

        $param = [
            'name' => "user2",
            'email' => 'user2@test.com',
            'password' => Hash::make('usertest'),//パスワードはハッシュ化
            'icon' => '/storage/1.png',
            'profile_text' => 'プロフィールです',
            "created_at" => new DateTime(),
            "updated_at" => new DateTime()
        ];
        DB::table("users")->insert($param);

        $param = [
            'name' => "user3",
            'email' => 'user3@test.com',
            'password' => Hash::make('usertest'),//パスワードはハッシュ化
            'icon' => '/storage/1.png',
            'profile_text' => '先生です',
            'flg' => 1,//senseiにセット
            'price' => 1000,
            'rating' => 3.5,
            "created_at" => new DateTime(),
            "updated_at" => new DateTime()
        ];
        DB::table("users")->insert($param);

    }
}
