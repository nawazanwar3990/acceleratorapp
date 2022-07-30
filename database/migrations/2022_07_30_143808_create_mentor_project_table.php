<?php

use App\Enum\ProjectTypeEnum;
use App\Enum\TableEnum;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create(TableEnum::MENTOR_PROJECT, function (Blueprint $table) {
            $table->id();
            $table->foreignId('mentor_id')->nullable()->constrained(TableEnum::MENTORS);
            $table->string('project_title')->nullable();
            $table->string('starting_date')->nullable();
            $table->string('ending_date')->nullable();
            $table->enum('type', ProjectTypeEnum::getValues())->default(ProjectTypeEnum::GOVERNMENT);
            $table->longText('further_remarks')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists(TableEnum::MENTOR_PROJECT);
    }
};
