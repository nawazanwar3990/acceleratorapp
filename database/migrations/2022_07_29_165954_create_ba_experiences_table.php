<?php

use App\Enum\TableEnum;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create(TableEnum::BA_EXPERIENCE, function (Blueprint $table) {
            $table->id();
            $table->foreignId('ba_id')->nullable()->constrained(TableEnum::BA);
            $table->string('company_name')->nullable();
            $table->string('designation')->nullable();
            $table->string('duration')->nullable();
            $table->text('any_achievement')->nullable();
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists(TableEnum::BA_EXPERIENCE);
    }
};
