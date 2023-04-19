<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purpose_stage', function (Blueprint $table) {
            $table->primary(['purpose_id', 'stage_id']);
            $table->foreignId('purpose_id')->constrained('purposes');
            $table->foreignId('stage_id')->constrained('stages');
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
        Schema::dropIfExists('purpose_stage');
    }
};
