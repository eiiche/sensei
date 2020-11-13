<?php

namespace Database\Seeders;

use DateTime;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'title' => "ニュース1タイトル",
            'text' => 'ニュース1本文',
            "created_at" => new DateTime(),
            "updated_at" => new DateTime()
        ];
        DB::table("news")->insert($param);

        $param = [
            'title' => "ニュース2タイトル",
            'text' => 'ニュース2文',
            "created_at" => new DateTime(),
            "updated_at" => new DateTime()
        ];
        DB::table("news")->insert($param);

        $param = [
            'title' => "ニュース3タイトル",
            'text' => 'ニュース3本文',
            "created_at" => new DateTime(),
            "updated_at" => new DateTime()
        ];
        DB::table("news")->insert($param);
    }
}
