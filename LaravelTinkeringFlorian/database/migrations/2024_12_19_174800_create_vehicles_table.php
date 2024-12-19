<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->string('marca');
            $table->string('model');
            $table->date('any_fabricacio');
            $table->string('color_fabrica');
            $table->decimal('preu', 10, 2);
            $table->text('info_adicional');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('vehicles');
    }
};
