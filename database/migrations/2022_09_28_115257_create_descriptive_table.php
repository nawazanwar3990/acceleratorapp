<?php

use App\Enum\TableEnum;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create(TableEnum::DESCRIPTIVE, function (Blueprint $table) {
            $table->id();
            $table->string('front_image')->nullable();
            $table->string('back_image')->nullable();
            $table->string('heading')->nullable();
            $table->longText('description')->nullable();
            $table->foreignId('created_by')->nullable()->constrained(TableEnum::USERS);
            $table->foreignId('updated_by')->nullable()->constrained(TableEnum::USERS);
            $table->foreignId('deleted_by')->nullable()->constrained(TableEnum::USERS);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists(TableEnum::DESCRIPTIVE);
    }
};
