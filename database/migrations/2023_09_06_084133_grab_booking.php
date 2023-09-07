<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class GrabBooking extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grab_bookings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_destination_offer'); 
            $table->unsignedBigInteger('id_user'); 
            $table->text('book_date');
            $table->foreign('id_destination_offer')->references('id')->on('destination_offers'); 
            $table->foreign('id_user')->references('id')->on('users'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('grab_bookings');
    }
}
