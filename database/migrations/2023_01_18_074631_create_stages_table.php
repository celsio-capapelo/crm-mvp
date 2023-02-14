<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Stage;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stages', function (Blueprint $table) {
            $table->id();
            $table->string('stage');
            $table->timestamps();
        });

        Stage::create(['stage' => 'leads']);
        Stage::create(['stage' => 'contacts']);
        Stage::create(['stage' => 'meetings']);
        Stage::create(['stage' => 'needs']);
        Stage::create(['stage' => 'proposals']);
        Stage::create(['stage' => 'contracts']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stages');
    }
};
