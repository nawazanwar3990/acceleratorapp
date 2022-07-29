<?php

use App\Enum\TableEnum;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create(TableEnum::BA_QUALIFICATION, function (Blueprint $table) {
            $table->id();
            $table->foreignId('ba_id')->nullable()->constrained(TableEnum::BA);
            $table->string('degree')->nullable();
            $table->string('institute')->nullable();
            $table->string('year_of_passing')->nullable();
            $table->string('grade')->nullable();
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists(TableEnum::BA_QUALIFICATION);
    }
};
