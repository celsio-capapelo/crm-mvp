<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Seller;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sellers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->integer('deals_closed')->nullable();
            $table->timestamps();
        });

        Seller::create([
            'name' => 'Jaeden Curtis',
            'email' => 'jaeden@example.com',
            'phone' => '111-222-333',
            'deals_closed' => 0,
        ]);
        Seller::create([
            'name' => 'Lailah Lloyd',
            'email' => 'lailah@example.com',
            'phone' => '111-222-444',
            'deals_closed' => 0,
        ]);
        Seller::create([
            'name' => 'Dominick Taylor',
            'email' => 'dominick@example.com',
            'phone' => '111-222-222',
            'deals_closed' => 0,
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sellers');
    }
};
