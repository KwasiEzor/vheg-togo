<?php

namespace App\Models;

use App\Models\Project;
use App\Models\Category;
use App\Models\Participant;
use Illuminate\Support\Str;
use App\Enums\FundStatusEnum;
use Illuminate\Support\Number;
use App\Enums\FundCurrenciesEnum;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Fund extends Model
{
    /** @use HasFactory<\Database\Factories\FundFactory> */
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'cover_img',
        'description',
        'amount',
        'goal_amount',
        'status',
        'currency',
        'category_id',
        'project_id',

    ];
    protected $casts = [
        'status' => FundStatusEnum::class,
        'currency' => FundCurrenciesEnum::class,
    ];

    public static function boot(): void
    {
        parent::boot();

        static::creating(function ($fund) {
            if (empty($fund->slug)) {
                $fund->slug = Str::slug($fund->title);
            }
        });
    }


    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function project(): BelongsTo
    {
        return $this->belongsTo(Project::class);
    }

    public function getFormattedAmount(): string
    {
        return  Number::currency(strval($this->amount), $this->currency);
    }

    public function participants(): BelongsToMany
    {
        return $this->belongsToMany(Participant::class, 'fund_participant');
    }

    public function calculateFundRate(int $estimation): int
    {
        return ($this->amount * $estimation) / 1000000;
    }

    public function getExcerpt()
    {
        return Str::limit(strip_tags($this->description), 100);
    }
}
