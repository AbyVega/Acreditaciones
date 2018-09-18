<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGuiaTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'guia';

    /**
     * Run the migrations.
     * @table guia
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('descPunto')->nullable();
            $table->string('instrPunto')->nullable();
            $table->string('docPunto')->nullable();
            $table->string('adiPunto', 200)->nullable();
            $table->string('valorPunto', 250)->nullable();
            $table->integer('indicador_id');

            $table->index(["indicador_id"], 'fk_guia_indicador1_idx');


            $table->foreign('indicador_id', 'fk_guia_indicador1_idx')
                ->references('id')->on('indicador')
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
