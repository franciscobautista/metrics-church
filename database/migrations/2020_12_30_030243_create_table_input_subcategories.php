<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableInputSubcategories extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('input_subcategories', function (Blueprint $table) {
            $table->increments('id');
            $table->integer("input_id")->unsigned();
            $table->foreign('input_id')
                ->references('id')->on('inputs')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->integer("subcategory_id")->unsigned();
            $table->foreign('subcategory_id')
                ->references('id')->on('subcategories')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->double('value', 16,2)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('input_subcategories');
    }
}
