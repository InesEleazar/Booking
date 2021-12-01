<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
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
            $table->string('Surname');
            $table->string('Middlename');
            $table->string('Firstname');
            $table->date('Bithday');
            $table->integer('Age');
            $table->string('Streetname');
            $table->string('City');
            $table->integer('Postalcode');
            $table->string('Phonenumber');
            $table->string('Mobilenumber');
            $table->string('Email');
            $table->string('Fullname');
            $table->string('EmergencyMobileNumber');
            $table->string('Relationship');
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
}
