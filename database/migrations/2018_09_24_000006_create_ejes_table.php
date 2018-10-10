<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEjesTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'ejes';

    /**
     * Run the migrations.
     * @table ejes
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('eje', 100)->nullable();
            $table->integer('entiAcreditadora_id');

            $table->index(["entiAcreditadora_id"], 'fk_ejes_entiAcreditadora1_idx');


            $table->foreign('entiAcreditadora_id', 'fk_ejes_entiAcreditadora1_idx')
                ->references('id')->on('entiAcreditadora')
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
