<?php

use App\Models\Participant;
use App\Models\Project;
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
        Schema::create('participant_project', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Participant::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Project::class)->constrained()->cascadeOnDelete();
            $table->date('joined_at')->default(now());
            $table->timestamps();

            $table->index(['participant_id', 'project_id']);
            $table->unique(['participant_id', 'project_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('participant_project');
    }
};
