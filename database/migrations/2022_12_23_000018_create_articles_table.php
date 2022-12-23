<?php

namespace Database\Migrations;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'articles';

    /**
     * Run the migrations.
     * @table articles
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->string('subject', 100)->nullable()->default(null);
            $table->text('content')->nullable()->default(null);
            $table->tinyInteger('enabled')->nullable()->default('1');
            $table->integer('sort')->nullable()->default('0');
            $table->timestamp('enabled_at')->nullable()->default(null);
            $table->string('tags', 200)->nullable()->default(null);
            $table->string('pic')->nullable()->default(null);
            $table->unsignedBigInteger('cgy_id');

            $table->index(["cgy_id"], 'articles_cgy_id_foreign');
            $table->nullableTimestamps();


            $table->foreign('cgy_id', 'articles_cgy_id_foreign')
                ->references('id')->on('cgies')
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
