<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $this->down();

        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('surname');
            $table->string('email', 50 )->unique();
            $table->string('phone', 50 )->unique();
            $table->smallInteger('hidden')->default(0);
            $table->string('password');
            $table->rememberToken();
            $table->softDeletes();
            $table->timestamps();

            // indexes
            $table->index('hidden', 'idx_hidden');

        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
