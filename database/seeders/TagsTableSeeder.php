<?php

namespace Database\Seeders;

use App\Models\User;
use DateTime;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'tag' => '3Dモデリング',
            "created_at" => new DateTime(),
            "updated_at" => new DateTime()
        ];
        DB::table("tags")->insert($param);
    }
}
