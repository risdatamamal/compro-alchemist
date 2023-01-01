<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListExperiencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('list_experiences', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->longText('desc')->nullable();
            $table->string('image_url')->nullable();
            $table->foreignId('experience_id')->constrained('experiences')->onDelete('cascade');

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
        Schema::dropIfExists('list_experiences');
    }
}
