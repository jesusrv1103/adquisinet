<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProveedoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proveedores', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre',180);
            $table->string('razon_social',180);
            $table->string('rfc',13);
            $table->string('cedula',20);
            $table->enum('tipo_persona', ['Fisica', 'Moral']);
            $table->string('domicilio',200);
            $table->string('telefono',17);
            $table->enum('estado', ['Activo', 'Inactivo']);
            $table->string('contacto',200);
            $table->string('representante_legal',200);
            $table->Decimal('capital_contable',8,2);
            $table->date('fecha_vigencia_cedula');
            $table->string('img_cedula',200);
            $table->string('email',100);
            $table->bigInteger('municipio_id')->unsigned();
            $table->foreign('municipio_id')->references('id')->on('municipios');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('proveedors');
    }
}
