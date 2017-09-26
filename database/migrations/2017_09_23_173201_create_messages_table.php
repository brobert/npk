<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(
            'messages',
            function (Blueprint $table) {
                // define columns
                $table->increments('id');
                $table->string('subject', 255);
                $table->text('body');
                $table->integer('sender_id', null, true);
                $table->enum('status', ['draft', 'sended'])->default('draft');

                // system columns
                $table->softDeletes();
                $table->timestamps();

                // define indexes and foreign keys
                $table->index('sender_id');
                $table->foreign('sender_id')->references('id')->on('users');
            }
        );


        Schema::create(
            'message_user',
            function(Blueprint $table)
            {
                // define columns
                $table->integer('message_id', null, true);  // autoincrement=null, unsigned=true
                $table->integer('user_id', null, true);     // autoincrement=null, unsigned=true
                $table->enum('status', ['new','readed','spam']);

                // system columns
                $table->softDeletes();
                $table->timestamps();

                // define indexes and foreign keys
                $table->index('message_id');
                $table->index('user_id');
                $table->unique(['message_id', 'user_id']);

                $table->foreign('message_id')->references('id')->on('messages');
                $table->foreign('user_id')->references('id')->on('users');
            }
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('message_user');
        Schema::dropIfExists('messages');
    }
}
