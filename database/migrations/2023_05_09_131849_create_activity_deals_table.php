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
        Schema::create('activity_deal', function (Blueprint $table) {
            $table->primary(['activity_id', 'deal_id']);
            $table->foreignId('deal_id')->constrained('deals');
            $table->foreignId('activity_id')->constrained('activities');
            $table->dateTime('schedule', $precision = 0);
            $table->text('comment')->nullable();
            $table->dateTime('completed_at ', $precision = 0)->nullable();
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
        Schema::dropIfExists('activity_deal');
    }
};
