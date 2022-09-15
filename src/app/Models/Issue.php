<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * Class Issue
 * @package App\Models
 */
class Issue extends Model
{
    use HasFactory;

    public const TABLE_NAME = 'issues';

    public const ID = 'id';
    public const AUTHOR_ID = 'author_id';
    public const ASSIGNEE_ID = 'assignee_id';
    public const TITLE = 'title';
    public const DESCRIPTION = 'description';


    /**
     * @return BelongsTo
     */
    public function author(): BelongsTo {
        return $this->belongsTo(User::class, self::AUTHOR_ID);
    }

    /**
     * @return BelongsTo
     */
    public function assignee(): BelongsTo {
        return $this->belongsTo(User::class, self::ASSIGNEE_ID);
    }

    /**
     * @return HasMany
     */
    public function comments(): HasMany {
        return $this->hasMany(Comment::class);
    }
}
