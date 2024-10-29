<?php

use App\Models\Category;
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
        Schema::create('category_project', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Category::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Project::class)->constrained()->cascadeOnDelete();

            $table->unique(['category_id', 'project_id']);
            $table->index(['category_id', 'project_id']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('category_project');
    }
};