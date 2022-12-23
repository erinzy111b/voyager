<?php

namespace Database\Migrations;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'items';

    /**
     * Run the migrations.
     * @table items
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->string('title', 20);
            $table->string('pic')->nullable()->default(null);
            $table->integer('price')->default('0');
            $table->tinyInteger('enabled')->default('1');
            $table->text('desc');
            $table->timestamp('enabled_at')->default('CURRENT_TIMESTAMP() ON UPDATE CURRENT_TIMESTAMP()');
            $table->unsignedBigInteger('cgy_id');

            $table->index(["cgy_id"], 'items_cgy_id_foreign');
            $table->nullableTimestamps();


            $table->foreign('cgy_id', 'items_cgy_id_foreign')
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
