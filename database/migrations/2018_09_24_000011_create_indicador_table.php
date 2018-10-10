<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIndicadorTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'indicador';

    /**
     * Run the migrations.
     * @table indicador
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('indicador', 105)->nullable();
            $table->integer('categorias_id');
            $table->decimal('numero')->nullable();

            $table->index(["categorias_id"], 'fk_indicador_categorias1_idx');


            $table->foreign('categorias_id', 'fk_indicador_categorias1_idx')
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
