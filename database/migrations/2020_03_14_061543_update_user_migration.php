<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateUserMigration extends Migration
{
    /**
     * Actualizamos la migracion de usuarios que provee laravel por defecto para adaptarla al crud
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
     
            $table->string('last_name')->after('name');
            $table->integer('phone_number')->after('last_name');
            $table->dropColumn('email_verified_at');
            $table->dropColumn('password');
            $table->dropColumn('remember_token');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('last_name');
            $table->dropColumn('phone_number');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
        });
    }
}
