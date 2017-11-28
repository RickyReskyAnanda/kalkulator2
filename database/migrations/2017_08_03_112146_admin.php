<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Admin extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $table->increments('id_admin');
        $table->string('username',100);
        $table->string('password',100);
        $table->string('email',100);
        $table->string('name', 100);
        $table->string('phone', 100);
        $table->text('alamat');
        $table->timestamps();
        $table->boolean('confirmed');
        $table->rememberToken();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
