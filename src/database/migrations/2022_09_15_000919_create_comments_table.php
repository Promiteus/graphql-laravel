<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Comment;

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
