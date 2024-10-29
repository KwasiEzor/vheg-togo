<?php

namespace App\Models;


use App\Models\User;
use App\Models\Category;
use Spatie\Tags\HasTags;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\Facades\Auth;
use Spatie\Comments\Models\Concerns\HasComments;

/** @package App\Models */
class Post extends Model
{
    /** @use HasFactory<\Database\Factories\PostFactory> */
    use HasFactory, HasTags, HasComments;

    protected $fillable = [
        'title',
        'meta_title',
        'slug',
        'description',
        'meta_description',
        'cover_img',
        'body',
        'user_id',
    ];

    public function commentableName(): string
    {
        return $this->title;
    }



    public function commentUrl(): string
    {
        return config('app.url');
    }

    public static function boot()
    {
        parent::boot();
        static::creating(function ($post) {
            if (empty($post->slug)) {
                $post->slug = Str::slug($post->title);
            }
            if (empty($post->meta_title) || empty($post->meta_description)) {
                $post->meta_title = $post->title;
                $post->meta_description = $post->description;
            }
        });
    }
    public function casts(): array
    {
        return [
            'is_published' => 'boolean',
            'is_featured' => 'boolean',
        ];
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class)->withTimestamps();
    }

    public function scopeWithCategory(Builder $query, string $categorySlug)
    {
        $query->whereHas('categories', function (Builder $query) use ($categorySlug) {
            $query->where('slug', $categorySlug);
        });
    }

    public function scopeSearch(Builder $query, string $searchTerm = '')
    {
        return $query->where('title', 'like', "%{$searchTerm}%")
            ->orWhere('body', 'like', "%{$searchTerm}%");
    }

    public function getExcerpt()
    {
        return Str::limit(strip_tags($this->body), 100);
    }
    public function getReadingTime()
    {
        $mins = round(str_word_count($this->body) / 250);
        return ($mins <= 0) ? 1 : $mins;
    }
}
