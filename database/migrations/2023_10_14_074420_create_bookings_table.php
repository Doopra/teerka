<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->string('title')->required();
            $table->string('first_name')->required();
            $table->string('last_name')->required();
            $table->string('email')->required()->email();
            $table->string('phone')->required();
            $table->string('event_date')->required()->date();
            $table->string('product_title')->required();
            $table->string('product_price')->required()->numeric();
            $table->string('product_city')->required();
            $table->text('comment')->nullable();
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
        Schema::dropIfExists('bookings');
    }
};
