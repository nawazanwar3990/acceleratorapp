<?php

use App\Enum\TableEnum;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create(TableEnum::MENTOR_QUALIFICATION, function (Blueprint $table) {
            $table->id();
            $table->foreignId('mentor_id')->nullable()->constrained(TableEnum::MENTORS);
            $table->string('degree')->nullable();
            $table->string('institute')->nullable();
            $table->string('year_of_passing')->nullable();
            $table->string('grade')->nullable();
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists(TableEnum::MENTOR_QUALIFICATION);
    }
};
