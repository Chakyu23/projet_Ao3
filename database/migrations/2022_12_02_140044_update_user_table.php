<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function ($table) {
            $table->text('bio')->nullable();
            $table->boolean('show_email');
            $table->date('birthdate');
            $table->boolean('show_birthdate');
            $table->boolean('hide_warning');
            $table->boolean('hide_tag');
            $table->boolean('comment_notification');
            $table->boolean('mailbox_notification');
            $table->boolean('like_notification');
            $table->boolean('allow_external_collection');
            $table->boolean('allow_gift');
            $table->boolean('gift_notification');
            $table->boolean('allow_history');
            $table->char('rank', 64);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
