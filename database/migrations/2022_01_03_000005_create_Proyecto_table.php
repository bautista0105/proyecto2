<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProyectoTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'Proyecto';

    /**
     * Run the migrations.
     * @table Proyecto
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('nombre', 55)->nullable();
            $table->string('descripcion')->nullable();
            $table->string('requisitos')->nullable();
            $table->date('fin')->nullable();
            $table->date('inicio')->nullable();
            $table->string('responsable', 45)->nullable();
            $table->binary('pdf')->nullable();
            $table->string('repositorio', 80)->nullable();
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
