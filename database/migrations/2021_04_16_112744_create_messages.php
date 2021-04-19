<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMessages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('from');
            $table->unsignedBigInteger('userid');
            $table->foreign('userid', 'fk_messages_users')
            ->on('users')
            ->references('id')
            ->onDelete('cascade');
            $table->unsignedBigInteger('grupoid');
            $table->foreign('grupoid', 'fk_messages_grupos')
            ->on('grupos')
            ->references('id')
            ->onDelete('cascade');
            $table->string('message');
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
        Schema::dropIfExists('messages');
    }
}
