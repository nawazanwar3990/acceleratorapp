<?php

use App\Enum\PlanForEnum;
use App\Enum\TableEnum;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create(TableEnum::OFFICE_PLAN, function (Blueprint $table) {
            $table->id();
            $table->foreignId('office_id')->constrained(TableEnum::OFFICES);
            $table->foreignId('plan_id')->constrained(TableEnum::PLANS);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists(TableEnum::OFFICE_PLAN);
    }
};
