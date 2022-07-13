<?php

use App\Enum\PlanForEnum;
use App\Enum\TableEnum;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create(TableEnum::PLANS, function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('no_of_persons')->nullable();
            $table->integer('duration')->nullable();
            $table->integer('price')->nullable();
            $table->integer('reminder_days')->nullable();
            $table->foreignId('created_by')->nullable()->constrained(TableEnum::USERS);
            $table->foreignId('updated_by')->nullable()->constrained(TableEnum::USERS);
            $table->foreignId('deleted_by')->nullable()->constrained(TableEnum::USERS);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists(TableEnum::PLANS);
    }
};
