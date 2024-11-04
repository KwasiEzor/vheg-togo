<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Support\Str;
use App\Enums\ProjectStatusEnum;
use App\Contracts\SearchableModelInterface;
use App\Traits\SearchableModel;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Project extends Model
{
    use HasFactory;



    protected $fillable = [
        'name',
        'slug',
        'description',
        'start_date',
        'end_date',
        'cover_img',
        'status',
    ];

    protected $casts = [
        'status' => ProjectStatusEnum::class,
        'start_date' => 'date',
        'end_date' => 'date',
    ];

    /**
     * Boot method
     *
     * @return void
     */
    public static function boot()
    {
        parent::boot();
        static::creating(function ($project) {
            if (empty($project->slug)) {
                $project->slug = Str::slug($project->name);
            }
        });
    }

    /**
     * Relationships
     */
    public function participants(): BelongsToMany
    {
        return $this->belongsToMany(Participant::class, 'participant_project')->withTimestamps();
    }

    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class);
    }

    public function scopeSearch(Builder $query, string $searchTerm = '')
    {
        return $query->where('name', 'like', "%{$searchTerm}%")
            ->orWhere('description', 'like', "%{$searchTerm}%");
    }
    public function scopeWithCategory(Builder $query, string $categorySlug)
    {
        $query->whereHas('categories', function (Builder $query) use ($categorySlug) {
            $query->where('slug', $categorySlug);
        });
    }

    public function galleries(): MorphMany
    {
        return $this->morphMany(Gallery::class, 'galleryable');
    }
}
