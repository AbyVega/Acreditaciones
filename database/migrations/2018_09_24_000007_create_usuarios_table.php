<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuariosTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'usuarios';

    /**
     * Run the migrations.
     * @table usuarios
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
            $table->string('apePaterno', 45);
            $table->string('apeMaterno', 45)->nullable();
            $table->string('email', 45)->nullable();
            $table->string('password', 100)->nullable();
            $table->integer('programaEducativo_id');
            $table->integer('tipos_id');
            $table->integer('Area_id');

            $table->index(["programaEducativo_id"], 'fk_users_programaEducativo1_idx');

            $table->index(["tipos_id"], 'fk_users_tipos1_idx');

            $table->index(["Area_id"], 'fk_users_Area1_idx');


            $table->foreign('programaEducativo_id', 'fk_users_programaEducativo1_idx')
                ->references('id')->on('programaEducativo')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('tipos_id', 'fk_users_tipos1_idx')
                ->references('id')->on('tipos')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('Area_id', 'fk_users_Area1_idx')
                ->references('id')->on('Area')
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
