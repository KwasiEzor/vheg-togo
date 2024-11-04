<?php

use App\Enums\FundCurrenciesEnum;
use App\Enums\FundStatusEnum;
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
        Schema::create('funds', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('cover_img')->nullable();
            $table->longText('description');
            $table->unsignedBigInteger('amount');
            $table->unsignedBigInteger('goal_amount')->default(0);
            $table->string('status')->default(FundStatusEnum::PENDING);
            $table->string('currency')->default(FundCurrenciesEnum::DOLLAR);
            $table->foreignIdFor(Category::class)->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignIdFor(Project::class)->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('funds');
    }
};
