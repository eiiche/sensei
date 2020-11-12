<?php

namespace Database\Seeders;

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
            'icon' => '',
            'profile_text' => 'プロフィールです',
            "created_at" => new DateTime(),
            "updated_at" => new DateTime()
        ];
        DB::table("users")->insert($param);

        $param = [
            'name' => "user2",
            'email' => 'user2@test.com',
            'password' => Hash::make('usertest'),//パスワードはハッシュ化
            'icon' => '',
            'profile_text' => 'プロフィールです',
            "created_at" => new DateTime(),
            "updated_at" => new DateTime()
        ];
        DB::table("users")->insert($param);

        $param = [
            'name' => "user3",
            'email' => 'user3@test.com',
            'password' => Hash::make('usertest'),//パスワードはハッシュ化
            'icon' => '',
            'profile_text' => '先生です',
            'flg' => 1,//senseiにセット
            "created_at" => new DateTime(),
            "updated_at" => new DateTime()
        ];
        DB::table("users")->insert($param);

    }
}
