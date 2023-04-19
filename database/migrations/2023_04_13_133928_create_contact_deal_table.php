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
        Schema::create('contact_deal', function (Blueprint $table) {
            $table->primary(['contact_id', 'deal_id']);
            $table->foreignId('deal_id')->constrained('deals');
            $table->foreignId('contact_id')->constrained('contacts');
            $table->boolean('is_primary')->default(false);
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
        Schema::dropIfExists('contact_deal');
    }
};
