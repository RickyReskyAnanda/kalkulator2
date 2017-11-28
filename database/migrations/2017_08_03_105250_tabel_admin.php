<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TabelAdmin extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tabel_admin', function (Blueprint $table) {
            $table->increments('id_admin');
            $table->string('username',100);
            $table->string('password');
            $table->string('email',100);
            $table->string('name', 100);
            $table->string('phone', 100);
            $table->text('alamat');
            $table->timestamps();
            $table->rememberToken();
        });
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
