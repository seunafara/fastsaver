<?php

use Carbon\Carbon;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFixedPlansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fixed_plans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->integer('user_id');
            $table->integer('plan_amount');
            $table->integer('interest_status')->default(1);
            $table->integer('plan_balance')->default(0);
            $table->integer('rate')->default(10);
            $table->date('start_date');
            //

            $tomorrow = Carbon::now()->addDays(1);
            $table->date('next_interest_date')->default($tomorrow);
            $table->date('end_date');
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
        Schema::dropIfExists('fixed_plans');
    }
}
