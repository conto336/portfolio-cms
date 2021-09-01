<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGeologiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('geologies', function (Blueprint $table) {
            $table->id();
            $table->text('url')->unique();
            $table->string('category', 25);
            $table->string('authors')->unique();
            $table->text('description')->unique();
            $table->text('line');
            $table->string('size', 12);
            
            /**Restriccion de llave foranea*/
            $table->unsignedBigInteger('document_id')->unique();
            $table->foreign('document_id')
                ->references('id')
                ->on('documents')
                ->onDelete('cascade');
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
        Schema::dropIfExists('geologies');
    }
}
