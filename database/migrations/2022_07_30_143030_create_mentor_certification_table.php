<?php

use App\Enum\TableEnum;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create(TableEnum::MENTOR_CERTIFICATION, function (Blueprint $table) {
            $table->id();
            $table->foreignId('mentor_id')->nullable()->constrained(TableEnum::MENTORS);
            $table->string('certificate_name')->nullable();
            $table->string('institute')->nullable();
            $table->string('year')->nullable();
            $table->string('any_distinction')->nullable();
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists(TableEnum::MENTOR_CERTIFICATION);
    }
};
