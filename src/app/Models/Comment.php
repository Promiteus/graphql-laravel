<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public const TABLE_NAME = "comments";

    public const ID = "id";
    public const AUTHOR_ID = "author_id";
    public const CONTENT = "content";
    public const ISSUE_ID = "issue_id";


    use HasFactory;
}
