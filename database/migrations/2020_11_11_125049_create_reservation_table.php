<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservation', function (Blueprint $table) {
            $table->increments("id");
            $table->unsignedInteger("sensei_id");
            $table->unsignedInteger('seito_id');
            $table->dateTime('schedule');//予約日時
            $table->double('hour');//学習時間
            $table->string('review_text')->nullable();
            $table->double('rating')->nullable();
            $table->timestamps();

            //外部キー制約。
            $table->foreign('sensei_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');

            //外部キー制約。
            $table->foreign('seito_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservation');
    }
}
