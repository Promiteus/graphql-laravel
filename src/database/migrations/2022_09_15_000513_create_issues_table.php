<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Issue;
use App\Models\User;

class CreateIssuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(Issue::TABLE_NAME, function (Blueprint $table) {
            $table->id('id');
            $table->unsignedBigInteger(Issue::AUTHOR_ID);
            $table->unsignedBigInteger(Issue::ASSIGNEE_ID);
            $table->string(Issue::TITLE);
            $table->text(Issue::DESCRIPTION);
            $table->timestamps();
            $table->foreign(Issue::AUTHOR_ID)
                ->references(User::ID)
                ->on(User::TABLE_NAME)
                ->cascadeOnDelete();
            $table->foreign(Issue::ASSIGNEE_ID)
                ->references(User::ID)
                ->on(User::TABLE_NAME)
                ->cascadeOnDelete()
                ->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists(Issue::TABLE_NAME);
    }
}
