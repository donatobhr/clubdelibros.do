<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddressTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(config('books.tables.core.address'), function (Blueprint $table) {
            $table->increments('id');
            $table->integer('sector_id')->unsigned();
            $table->string('address');
            $table->timestamps();

            //Foreign Key's
            $table->foreign('sector_id')->references('id')->on(config('books.tables.core.sector'))->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop(config('books.tables.core.address'));
    }
}
