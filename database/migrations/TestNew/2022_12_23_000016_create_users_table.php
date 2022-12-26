<?php

namespace Database\Migrations;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'users';

    /**
     * Run the migrations.
     * @table users
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->unsignedBigInteger('role_id')->nullable()->default(null);
            $table->string('name');
            $table->string('email');
            $table->string('avatar')->nullable()->default('users/default.png');
            $table->timestamp('email_verified_at')->nullable()->default(null);
            $table->string('password');
            $table->rememberToken();
            $table->text('settings')->nullable()->default(null);

            $table->unique(["email"], 'users_email_unique');

            $table->index(["role_id"], 'users_role_id_foreign');
            $table->nullableTimestamps();


            $table->foreign('role_id', 'users_role_id_foreign')
                ->references('id')->on('roles')
                ->onDelete('restrict')
                ->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists($this->tableName);
    }
}
