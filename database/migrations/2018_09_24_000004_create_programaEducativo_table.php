<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProgramaeducativoTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'programaEducativo';

    /**
     * Run the migrations.
     * @table programaEducativo
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('nombre', 45);
            $table->string('matricula', 45);
            $table->string('evaluableCIEES', 45)->nullable();
            $table->string('evaluableCOPAES', 10)->nullable();
            $table->string('evaluableInter', 10)->nullable();
            $table->string('status', 45);
            $table->string('tipoPrograma', 45);
            $table->date('fechaInicio');
            $table->string('calificacion', 10);
            $table->date('fechaDictamen');
            $table->date('fechaVigencia');
            $table->string('calidad', 45);
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
