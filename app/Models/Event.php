<?php

namespace App\Models;

use App\Models\Gallery;
use App\Models\Organizer;
use App\Models\Participant;
use Illuminate\Support\Str;
use App\Enums\EventStatusEnum;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'description',
        'location',
        'organizer',
        'cover_img',
        'status',
        'start_date',
        'end_date'
    ];

    protected $casts = [
        'start_date' => 'date',
        'end_date' => 'date',
        'status' => EventStatusEnum::class,
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($event) {
            if (empty($event->slug)) {
                $event->slug = Str::slug($event->title);
            }
        });
    }

    public function organizers(): BelongsToMany
    {
        return $this->belongsToMany(Organizer::class);
    }

    public function participants(): BelongsToMany
    {
        return $this->belongsToMany(Participant::class)
            ->withPivot('joined_at');
    }

    public function scopeSearch(Builder $query, string $searchTerm = '')
    {
        return $query->where('title', 'like', "%{$searchTerm}%")
            ->orWhere('location', 'like', "%{$searchTerm}%");
    }

    public function scopeWithDate(Builder $query, string $date)
    {
        return $query->where('start_date', '>=', $date)
            ->where('end_date', '<=', $date);
    }

    public function scopeWithOrganizers(Builder $query, string $organizerSlug)
    {
        $query->whereHas('organizers', function (Builder $query) use ($organizerSlug) {
            $query->where('slug', $organizerSlug);
        });
    }

    public function galleries(): MorphMany
    {
        return $this->morphMany(Gallery::class, 'galleryable');
    }
}
