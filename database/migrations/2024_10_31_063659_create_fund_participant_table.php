<?php

use App\Models\Fund;
use App\Models\Participant;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('fund_participant', function (Blueprint $table) {

            $table->id();
            $table->foreignIdFor(Fund::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Participant::class)->constrained()->cascadeOnDelete();

            $table->index(['fund_id', 'participant_id']);
            $table->unique(['fund_id', 'participant_id']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fund_participant');
    }
};
