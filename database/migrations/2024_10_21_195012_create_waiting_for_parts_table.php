<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('waiting_for_parts', function (Blueprint $table) {
            $table->id();
            $table->foreignId("worksheet_id");
            $table->foreign("worksheet_id")->references("id")->on("worksheets");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('waiting_for_parts');
    }
};
