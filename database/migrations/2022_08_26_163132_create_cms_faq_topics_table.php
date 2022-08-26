<?php

use App\Enum\TableEnum;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create(TableEnum::CMS_FAQ_TOPICS, function (Blueprint $table) {
            $table->id();
            $table->string('name', 255)->nullable();
            $table->string('icon', 255)->nullable();
            $table->integer('order')->nullable();
            $table->integer('page_id')->nullable();
            $table->boolean('active')->default(false);
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists(TableEnum::CMS_FAQ_TOPICS);
    }
};
