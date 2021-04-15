<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembresias extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('membresias', function (Blueprint $table) {
            $table->bigIncrements('id');
             $table->unsignedBigInteger('userid');                
             $table->foreign('userid', 'fk_membresias_users')
             ->on('users')
             ->references('id')
             ->onDelete('restrict');
             $table->unsignedBigInteger('grupoid');                  
             $table->foreign('grupoid', 'fk_membresias_grupos')   
            ->on('grupos')
             ->references('id')
             ->onDelete('restrict');
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
        Schema::dropIfExists('membresias');
    }
}
