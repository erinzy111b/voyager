<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cgies', function (Blueprint $table) {
            $table->id();
            $table->string('title', 20);
            // $table->string('subject', 100)->nullable();
            $table->string('pic', 255)->nullable();
            // $table->text('desc')->nullable();
            // $table->boolean('enabled')->default(true)->nullable();
            // $table->timestamp('enabled_at')->nullable();
            $table->integer('sort')->default(0);
            $table->timestamps();

            // ->unsigned()只能用在數值格, 不然會報錯

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cgies');
    }
};
