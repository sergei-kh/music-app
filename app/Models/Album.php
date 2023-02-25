<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Album extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "executor_id",
        "created_at",
    ];

    /**
     * Timestamps to be set.
     *
     * @var string[]
     */
    public $timestamps = ["created_at"];

    /**
     * Disable model update timestamp.
     *
     * @var string|null
     */
    public const UPDATED_AT = null;

    /**
     * @return BelongsTo
     */
    public function executor(): BelongsTo
    {
        return $this->belongsTo(Executor::class);
    }

    /**
     * @return BelongsToMany
     */
    public function songs(): BelongsToMany
    {
        return $this->belongsToMany(Song::class);
    }
}
