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
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email', 50)->unique();
            $table->string('password');
            $table->string('remember_token')->nullable();
            $table->enum('role', ['admin', 'operator']);
        });

        Schema::table('casis', function (Blueprint $table) {
            $table->foreign('id_user')
                  ->references('id')
                  ->on('users')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
        });

        Artisan::call('db:seed', array('--class' => 'AdminUserSeeder'));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('casis', function(Blueprint $table) {
            $table->dropForeign('casis_id_user_foreign');
        });
        Schema::dropIfExists('users');
    }
}
