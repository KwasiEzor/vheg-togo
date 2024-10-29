<?php

namespace App\Models;

use App\Enums\OrganizerTypeEnum;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Organizer extends Model
{
    /** @use HasFactory<\Database\Factories\OrganizerFactory> */
    use HasFactory;
    protected $fillable = [
        'name',
        'slug',
        'description',
        'organizer_type',
        'organizer_domain',
        'contact_email',
        'contact_number',
        'website',
        'logo',
        'user_id',
    ];
    public static function boot()
    {
        parent::boot();
        static::creating(function ($organizer) {
            if (empty($organizer->slug)) {
                $organizer->slug = Str::slug($organizer->name);
            }
        });
    }

    public function casts(): array
    {
        return [
            'organizer_type' => OrganizerTypeEnum::class
        ];
    }

    public function events(): BelongsToMany
    {
        return $this->belongsToMany(Event::class);
    }

    public function organizer(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
