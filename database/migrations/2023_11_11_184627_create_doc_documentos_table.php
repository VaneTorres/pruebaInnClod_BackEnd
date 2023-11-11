<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocDocumentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doc_documentos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tip_id')->constrained('tip_tipo_docs');
            $table->foreignId('pro_id')->constrained('pro_procesos');
            $table->string('doc_nombre', 100);
            $table->text('doc_contenido',4000);
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
        Schema::dropIfExists('doc_documentos');
    }
}
