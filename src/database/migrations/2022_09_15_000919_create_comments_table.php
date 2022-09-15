<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Comment;
use App\Models\User;
use App\Models\Issue;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(Comment::TABLE_NAME, function (Blueprint $table) {
            $table->id(Comment::ID);
            $table->unsignedBigInteger(Comment::ISSUE_ID);
            $table->string(Comment::CONTENT);
            $table->unsignedBigInteger(Comment::AUTHOR_ID);
            $table->timestamps();
            $table->foreign(Comment::AUTHOR_ID)
                ->references(User::ID)
                ->on(User::TABLE_NAME)
                ->cascadeOnDelete();
            $table->foreign(Comment::ISSUE_ID)
                ->references(Issue::ID)
                ->on(Issue::TABLE_NAME)
                ->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists(Comment::TABLE_NAME);
    }
}
