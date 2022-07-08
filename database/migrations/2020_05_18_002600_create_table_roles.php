<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableRoles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->increments('id');
            /*$table->integer("organization_id")->unsigned();
            $table->foreign('organization_id')
                ->references('id')->on('organizations')
                ->onDelete('cascade')
                ->onUpdate('cascade');*/
            $table->string('name',100)->nullable();
            $table->string('description')->nullable();
            $table->string('special',20)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('roles');
    }
}
