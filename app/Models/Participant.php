<?php

namespace App\Models;

use App\Models\Fund;
use App\Models\User;
use App\Models\Event;
use App\Models\Project;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Participant extends Model
{
    /** @use HasFactory<\Database\Factories\ParticipantFactory> */
    use HasFactory;

    protected $fillable = [
        'bio',
        'role',
        'status',
        'profession',
        'date_of_birth',
        'country',
        'city',
        'address',
        'zip_code',
        'phone_number',
        'joined_at',
        'user_id'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function projects(): BelongsToMany
    {
        return $this->belongsToMany(Project::class);
    }

    public function events(): BelongsToMany
    {
        return $this->belongsToMany(Event::class)
            ->withPivot('joined_at');
    }

    public function funds(): BelongsToMany
    {
        return $this->belongsToMany(Fund::class, 'fund_participant');
    }
}
