<?php

namespace App\Models;

use Illuminate\Support\Str;
use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\MorphTo;


class Gallery extends Model implements HasMedia
{
    /** @use HasFactory<\Database\Factories\GalleryFactory> */
    use HasFactory, InteractsWithMedia;
    protected $fillable = [
        'title',
        'slug',
        'cover_img',
        'description',
        'galleryable_id',
        'galleryable_type'
    ];

    public static function boot()
    {
        parent::boot();
        static::creating(function ($gallery) {
            if (empty($gallery->slug)) {
                $gallery->slug = Str::slug($gallery->title);
            }
        });
    }

    public function galleryable(): MorphTo
    {
        return $this->morphTo();
    }

    public function storeImage($file, ?string $collectionName)
    {
        $identifier = class_basename($this->galleryable);
        $timestamp = $this->created_at->format('Y-m-d');
        $randomId = Str::random(10);
        $collectionName = $collectionName ?? 'images';
        $filename = "{$identifier}-{$timestamp}-{$randomId}";

        $this->addMedia($file)
            ->usingFileName("{$filename}.{$file->getClientOriginalExtension()}")
            ->toMediaCollection($collectionName);
    }
}
