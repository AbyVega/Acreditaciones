<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFodaTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'foda';

    /**
     * Run the migrations.
     * @table foda
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('fortalezas')->nullable();
            $table->string('oportunidad')->nullable();
            $table->integer('categorias_id');

            $table->index(["categorias_id"], 'fk_foda_categorias1_idx');


            $table->foreign('categorias_id', 'fk_foda_categorias1_idx')
                ->references('id')->on('categorias')
                ->onDelete('no action')
                ->onUpdate('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
       Schema::dropIfExists($this->set_schema_table);
     }
}
