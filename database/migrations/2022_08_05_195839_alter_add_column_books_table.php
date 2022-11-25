<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterAddColumnBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('books', function (Blueprint $table) {
            $table->text('service_name')->nullable()->after('completed');
            $table->text('service_price')->nullable()->after('service_name');
            $table->text('service_custom_message')->nullable()->after('service_price');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('books', function (Blueprint $table) {
            $table->removeColumn('service_name');
            $table->removeColumn('service_price');
            $table->removeColumn('service_custom_message');
        });
    }
}
