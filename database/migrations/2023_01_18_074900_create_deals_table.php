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
            $table->string('schedule')->nullable();
            $table->foreignId('stages_id');
            $table->foreignId('sellers_id');
            $table->timestamps();
        });

        Deal::create([
            'description' => 'Minor Workshop deal',
            'company' => 'Minor Workshop',
            'img' => 'images/profile.png',
            'money' => 3000,
            'schedule' => 'today',
            'stages_id' => 1,
            'sellers_id' => 1
        ]);
        Deal::create([
            'description' => 'John Smith',
            'company' => 'Coke',
            'img' => 'images/profile.png',
            'money' => 5000,
            'schedule' => 'delay',
            'stages_id' => 1,
            'sellers_id' => 1
        ]);
        Deal::create([
            'description' => 'Bill Gates - Microsoft',
            'company' => 'Microsoft',
            'img' => 'images/profile.png',
            'money' => 10000,
            'schedule' => 'future',
            'stages_id' => 1,
            'sellers_id' => 1
        ]);
        Deal::create([
            'description' => 'James Kirk - UFP',
            'company' => 'UFP',
            'img' => 'images/profile.png',
            'money' => 33000,
            'schedule' => '',
            'stages_id' => 1,
            'sellers_id' => 1
        ]);
        Deal::create([
            'description' => 'Bruce Wayne',
            'company' => 'Wayne Enterprises',
            'img' => 'images/profile.png',
            'money' => 12000,
            'schedule' => '',
            'stages_id' => 2,
            'sellers_id' => 3
        ]);
        Deal::create([
            'description' => 'Griphook - Gringotts (March-2021)',
            'company' => 'Griphook',
            'img' => 'images/profile.png',
            'money' => 10000,
            'schedule' => 'future',
            'stages_id' => 2,
            'sellers_id' => 2
        ]);
        Deal::create([
            'description' => 'Nick Fury - Shield',
            'company' => 'Shield',
            'img' => 'images/profile.png',
            'money' => 6750,
            'schedule' => 'future',
            'stages_id' => 3,
            'sellers_id' => 2
        ]);
        Deal::create([
            'description' => 'Holly McClane - Nakatomi Trading Corp. (Payment 2)',
            'company' => 'Nakatomi Trading Corp.',
            'img' => 'images/profile.png',
            'money' => 10000,
            'schedule' => 'future',
            'stages_id' => 3,
            'sellers_id' => 2
        ]);
        Deal::create([
            'description' => 'Jimmy Hendrix - Loud Music',
            'company' => 'Loud Music',
            'img' => 'images/profile.png',
            'money' => 33000,
            'schedule' => 'future',
            'stages_id' => 3,
            'sellers_id' => 2
        ]);
        Deal::create([
            'description' => 'Bass Industries (Chuck Bass)',
            'company' => 'Bass Industries',
            'img' => 'images/profile.png',
            'money' => 7300,
            'schedule' => 'today',
            'stages_id' => 4,
            'sellers_id' => 2
        ]);
        Deal::create([
            'description' => 'Apple Inc (Marketing Plan)',
            'company' => 'Apple',
            'img' => 'images/profile.png',
            'money' => 3000,
            'schedule' => 'future',
            'stages_id' => 4,
            'sellers_id' => 2
        ]);
        Deal::create([
            'description' => 'Jane Smith (Website )',
            'company' => 'Jane\'s Co',
            'img' => 'images/profile.png',
            'money' => 8000,
            'schedule' => 'future',
            'stages_id' => 5,
            'sellers_id' => 2
        ]);
        Deal::create([
            'description' => 'Lois Lane - The Dailly Planet',
            'company' => 'The Dailly Planet',
            'img' => 'images/profile.png',
            'money' => 33000,
            'schedule' => 'future',
            'stages_id' => 5,
            'sellers_id' => 2
        ]);
        Deal::create([
            'description' => 'Wendy Darcy - Palo Alto Networks',
            'company' => 'Palo Alto Networks',
            'img' => 'images/profile.png',
            'money' => 69000,
            'schedule' => 'future',
            'stages_id' => 5,
            'sellers_id' => 2
        ]);
        Deal::create([
            'description' => 'Tom\'s Big Company - Paul Minors #15',
            'company' => 'Tom\'s Big Company',
            'img' => 'images/profile.png',
            'money' => 12000,
            'schedule' => 'today',
            'stages_id' => 5,
            'sellers_id' => 2
        ]);
        Deal::create([
            'description' => 'Tom\'s Big Company - Paul Minors #8',
            'company' => 'Tom\'s Big Company',
            'img' => 'images/profile.png',
            'money' => 8000,
            'schedule' => 'future',
            'stages_id' => 5,
            'sellers_id' => 2
        ]);
        Deal::create([
            'description' => 'Tesla - Elon Musk #86 (Payment #2)',
            'company' => 'Tesla',
            'img' => 'images/profile.png',
            'money' => 10000,
            'schedule' => 'future',
            'stages_id' => 5,
            'sellers_id' => 2
        ]);
        Deal::create([
            'description' => 'Ellen Page - Microcorp Inc',
            'company' => 'Microcorp Inc',
            'img' => 'images/profile.png',
            'money' => 500,
            'schedule' => 'future',
            'stages_id' => 6,
            'sellers_id' => 2
        ]);
        Deal::create([
            'description' => 'Holly McClane - Nakatomi Trading Corp. (Payment 1)',
            'company' => 'Microcorp Inc',
            'img' => 'images/profile.png',
            'money' => 33000,
            'schedule' => 'future',
            'stages_id' => 6,
            'sellers_id' => 2
        ]);
        Deal::create([
            'description' => 'Johh\'s Big Company deal',
            'company' => 'Johh\'s Big Company deal',
            'img' => 'images/profile.png',
            'money' => 22000,
            'schedule' => 'today',
            'stages_id' => 6,
            'sellers_id' => 2
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
