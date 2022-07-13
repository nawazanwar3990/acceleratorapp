<?php

use App\Enum\PlanForEnum;
use App\Enum\TableEnum;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create(TableEnum::PLAN_SERVICE, function (Blueprint $table) {
            $table->id();
            $table->foreignId('plan_id')->nullable()->constrained(TableEnum::PLANS);
            $table->foreignId('service_id')->nullable()->constrained(TableEnum::SERVICES);
            $table->string('type')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists(TableEnum::PLAN_SERVICE);
    }
};
