<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Issue;

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
