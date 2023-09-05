<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ResolTablaDatoSim extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("resol_tabla_dato_sim" , function (Blueprint $table) {
            $table->id();
            $table->integer("tabla_id")->nullable();
            $table->integer("perdesde")->nullable();
            $table->integer("perhasta")->nullable();
            $table->string("paramstr",50);
            $table->float("param1");
            $table->float("param2");
            $table->float("param3");
            $table->float("param4");
            $table->float("param5");
            $table->timestamp("fchmod")->nullable();
            $table->integer("usrmod")->nullable();
            $table->timestamps();
            $table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        //
        Schema::dropIfExists("resol_tabla_dato_sim");
    }
}
