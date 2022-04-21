<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('szakdogas', function (Blueprint $table) {
            $table->id();
            $table->string('szakdoga_nev');
            $table->string('githublink');
            $table->string('oldallink');
            $table->string('tagokneve');
            $table->timestamps();
        });

        DB::table('szakdogas')->insert([
            ['szakdoga_nev' => "Tipegok", 'githublink' => 'https://unsplash.com/s/photos/dogs', 'oldallink' => 'https://unsplash.com/s/photos/dogs', 'tagokneve' => 'B, N'],
            ['szakdoga_nev' => "Totyogok", 'githublink' => 'https://unsplash.com/s/photos/cats', 'oldallink' => 'https://unsplash.com/s/photos/cats', 'tagokneve' => 'B, N'],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('szakdogas');
    }
};
