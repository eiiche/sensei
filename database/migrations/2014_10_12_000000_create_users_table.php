<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments("id");
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
            //追加分
            $table->boolean('flg')->default(0);//SENSEI or SEITO
            $table->string('profile_text')->nullable();//プロフ文
            $table->integer('price')->nullable();//価格
            $table->boolean('rating')->nullable();//評価
            $table->string('icon')->nullable();//プロフアイコン
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('user_tag');
        Schema::dropIfExists('images');
        Schema::dropIfExists('tags');
    }
}
