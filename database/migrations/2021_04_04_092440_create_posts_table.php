<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->integer('category_id')->nullable();
            $table->text('post_title')->nullable();
            $table->text('short_title')->nullable();
            $table->text('post_slug')->nullable();
            $table->longtext('post_details')->nullable();
            $table->string('post_file')->nullable();
            $table->date('post_date')->nullable();
            $table->string('image')->nullable();
            $table->tinyinteger('status')->default('1');
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
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
        Schema::dropIfExists('posts');
    }
}
