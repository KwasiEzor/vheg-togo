<?php

use App\Enums\ParticipantStatusEnum;
use App\Enums\ProjectParticipantRoleEnum;
use App\Models\User;
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
        Schema::create('participants', function (Blueprint $table) {
            $table->id();
            $table->string('bio');
            $table->string('role')->default(ProjectParticipantRoleEnum::PARTICIPANT);
            $table->string('status')->default(ParticipantStatusEnum::ACTIVE);
            $table->string('profession');
            $table->date('date_of_birth');
            $table->string('country');
            $table->string('city');
            $table->string('address');
            $table->string('zip_code')->nullable();
            $table->string('phone_number');
            $table->date('joined_at')->default(now());
            $table->foreignIdFor(User::class)->constrained()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('participants');
    }
};
