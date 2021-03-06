<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMainRewardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('main_rewards', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('campaign_id');
            $table->bigInteger('rank_id');
            $table->date('date_start');
            $table->time('time_start');
            $table->date('date_end');
            $table->time('time_end');
            $table->integer('amount')->default(0);
            $table->tinyInteger('is_show')->default(1)->comment('1:show, 0:hide');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('main_rewards');
    }
}
