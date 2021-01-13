<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReactableTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reactable', function (Blueprint $table) {
            $table->id();
            $table->foreignId('reaction_id')->constrained();
            $table->string('reactable_type');
            $table->integer('reactable_id');
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
        Schema::table('reactable', function (Blueprint $table) {
            $table->dropForeign(['reaction_id']);
        });
        Schema::dropIfExists('reactable');
    }
}
