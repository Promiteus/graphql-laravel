<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Issue extends Model
{
    public const TABLE_NAME = 'issues';

    public const ID = 'id';
    public const AUTHOR_ID = 'author_id';
    public const ASSIGNEE_ID = 'assignee_id';
    public const TITLE = 'title';
    public const DESCRIPTION = 'description';

    use HasFactory;
}
