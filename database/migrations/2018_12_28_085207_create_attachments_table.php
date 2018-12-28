<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAttachmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attachments', function (Blueprint $table) {
            $table->increments('id');
            $table->morphs('attachmentable');
            $table->string('slug')->nullable();
            $table->string('title', 256)->nullable();
            $table->string('file_name', 512)->nullable();
            $table->string('group_name')->nullable();
            $table->string('mime')->nullable();         // like: png/jpeg/jpg
            $table->string('size')->nullable();
            $table->string('size_format')->nullable(); // kilobyte / megabyte / ...
            $table->softDeletes();
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
        Schema::dropIfExists('attachments');
    }
}
