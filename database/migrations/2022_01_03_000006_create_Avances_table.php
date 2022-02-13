<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAvancesTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'Avances';

    /**
     * Run the migrations.
     * @table Avances
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('descripcion')->nullable();
            $table->date('fecha')->nullable();
            $table->string('url', 80)->nullable();
            $table->binary('reportes')->nullable();
            $table->unsignedInteger('Registro_id');

            $table->index(["Registro_id"], 'fk_Avances_Registro_idx');


            $table->foreign('Registro_id', 'fk_Avances_Registro_idx')
                ->references('id')->on('Proyecto')
                ->onDelete('cascade')
                ->onUpdate('cascade');
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
