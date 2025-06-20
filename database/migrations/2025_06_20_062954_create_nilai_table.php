<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        schema::create('nilai', function (Blueprint $table) {
            $table->id();
            $table->char('normorindukmahasiswa', 5);
            $table->integer('nilaiangka');
            $table->integer('sks');
            $table->timestamps();
        });
    }
}
;
