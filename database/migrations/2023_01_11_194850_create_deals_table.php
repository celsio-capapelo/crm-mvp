<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Deal;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deals', function (Blueprint $table) {
            $table->id();
            $table->string('description');
            $table->string('company');
            $table->string('img');
            $table->decimal('money', $precision = 10, $scale = 2);
            $table->string('schedule');
            $table->foreignId('deals_id');
            $table->timestamps();
        });

        Deal::create([
            'description' => 'Minor Workshop deal',
            'company' => 'Minor Workshop',
            'img' => 'images/profile.png',
            'money' => 3000,
            'schedule' => 'today',
            'deals_id' => 1
        ]);
        Deal::create([
            'description' => 'John Smith',
            'company' => 'Coke',
            'img' => 'images/profile.png',
            'money' => 5000,
            'schedule' => 'delay',
            'deals_id' => 1
        ]);
        Deal::create([
            'description' => 'Bill Gates - Microsoft',
            'company' => 'Microsoft',
            'img' => 'images/profile.png',
            'money' => 10000,
            'schedule' => 'future',
            'deals_id' => 1
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('deals');
    }
};
