<?php

use App\Enum\TableEnum;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create(TableEnum::CMS_FAQ_TOPIC_SECTIONS, function (Blueprint $table) {
            $table->id();
            $table->foreignId('topic_id')->nullable();
            $table->text('question')->nullable();
            $table->longText('answer')->nullable();
            $table->integer('order')->nullable();
            $table->boolean('active')->default(true);
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists(TableEnum::CMS_FAQ_TOPIC_SECTIONS);
    }
};
