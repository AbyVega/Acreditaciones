<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProcesoTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'proceso';

    /**
     * Run the migrations.
     * @table proceso
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('estadoPrograma', 45)->nullable();
            $table->integer('versionIntrumento')->nullable();
            $table->date('fechaInicio')->nullable();
            $table->string('statusFinanciero', 45)->nullable();
            $table->float('FIPCuota')->nullable();
            $table->float('cuota')->nullable();
            $table->float('FIPViaticos')->nullable();
            $table->float('viaticos')->nullable();
            $table->float('material')->nullable();
            $table->integer('entiAcreditadora_id');
            $table->integer('programaEducativo_id');

            $table->index(["entiAcreditadora_id"], 'fk_proceso_entiAcreditadora1_idx');

            $table->index(["programaEducativo_id"], 'fk_proceso_programaEducativo1_idx');


            $table->foreign('entiAcreditadora_id', 'fk_proceso_entiAcreditadora1_idx')
                ->references('id')->on('entiAcreditadora')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('programaEducativo_id', 'fk_proceso_programaEducativo1_idx')
                ->references('id')->on('programaEducativo')
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
