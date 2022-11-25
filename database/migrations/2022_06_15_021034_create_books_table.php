<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('appointment_type')->nullable();
            $table->string('brand')->nullable(false);
            $table->string('model')->nullable(false);
            $table->string('kilometers')->nullable(false);
            $table->string('car_number')->nullable(false);
            $table->date('appointment_date')->nullable();
            $table->string('appointment_time')->nullable();
            $table->boolean('accept')->comment('0 not accept and 1 appointment accept')->default(0);
            $table->boolean('reject')->comment('0 not reject and 1 appointment reject')->default(0);
            $table->boolean('completed')->comment('0 not complete and 1 appointment complete')->default(0);
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
        Schema::dropIfExists('books');
    }
}
