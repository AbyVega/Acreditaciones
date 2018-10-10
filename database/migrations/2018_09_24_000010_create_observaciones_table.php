<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateObservacionesTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'observaciones';

    /**
     * Run the migrations.
     * @table observaciones
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('observaIncidencia', 150);
            $table->string('tiempoSolucion', 45);
            $table->date('fechaCompromiso');
            $table->string('estadoIncidencia', 45)->nullable();
            $table->integer('Area_id');
            $table->integer('puntosEvalu_id');
            $table->integer('proceso_id');

            $table->index(["Area_id"], 'fk_observaciones_Area1_idx');

            $table->index(["puntosEvalu_id"], 'fk_observaciones_puntosEvalu1_idx');

            $table->index(["proceso_id"], 'fk_observaciones_proceso1_idx');


            $table->foreign('Area_id', 'fk_observaciones_Area1_idx')
                ->references('id')->on('Area')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('puntosEvalu_id', 'fk_observaciones_puntosEvalu1_idx')
                ->references('id')->on('puntosEvalu')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('proceso_id', 'fk_observaciones_proceso1_idx')
                ->references('id')->on('proceso')
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
