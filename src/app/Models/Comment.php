<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class Comment
 * @package App\Models
 */
class Comment extends Model
{
    use HasFactory;

    public const TABLE_NAME = "comments";

    public const ID = "id";
    public const AUTHOR_ID = "author_id";
    public const CONTENT = "content";
    public const ISSUE_ID = "issue_id";

    /**
     * @return BelongsTo
     */
    public function issue(): BelongsTo {
        return $this->belongsTo(Issue::class, self::ISSUE_ID);
    }

    /**
     * @return BelongsTo
     */
    public function author(): BelongsTo {
        return $this->belongsTo(User::class, self::AUTHOR_ID);
    }
}
