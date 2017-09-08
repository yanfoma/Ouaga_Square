<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateprojetTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projet', function (Blueprint $table) {
            $table->increments('id');
            $table->text('resume_titre');
            $table->text('full_titre');
            $table->text('contenu');
            $table->text('cout');
            $table->integer('responsable_id')->unsigned();
			$table->foreign('responsable_id')->references('id')->on('responsable');
            $table->integer('executeur_id')->unsigned();
            $table->foreign('executeur_id')->references('id')->on('executeur');
            $table->text('delai');
            $table->integer('phase_id')->unsigned();
            $table->foreign('phase_id')->references('id')->on('phase');
            $table->integer('categorie_id')->unsigned();
            $table->foreign('categorie_id')->references('id')->on('categorie');
         // $table->rememberToken();
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
        Schema::drop('projet');
    }
}
