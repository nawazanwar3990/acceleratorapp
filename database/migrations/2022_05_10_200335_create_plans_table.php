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
            $table->enum('plan_for', PlanForEnum::getValues())->default(PlanForEnum::BUILDING);
            $table->foreignId('building_id')->nullable()->constrained(TableEnum::BUILDINGS);
            $table->foreignId('flat_id')->nullable()->constrained(TableEnum::FLATS);
            $table->foreignId('floor_id')->nullable()->constrained(TableEnum::FLOORS);
            $table->foreignId('plan_id')->nullable()->constrained(TableEnum::PLANS);
            $table->string('name')->nullable();
            $table->integer('months')->nullable();
            $table->integer('installment_duration')->nullable();
            $table->integer('total_installments')->nullable();
            $table->integer('reminder_days')->nullable();
            $table->integer('down_payment_type')->nullable();
            $table->decimal('down_payment_value', 10, 2)->nullable();
            $table->boolean('penalties')->default(false);
            $table->boolean('first_penalty')->default(false);
            $table->integer('first_penalty_days')->nullable();
            $table->string('first_penalty_type')->nullable();
            $table->string('first_penalty_charges')->nullable();
            $table->boolean('second_penalty')->default(false);
            $table->integer('second_penalty_days')->nullable();
            $table->string('second_penalty_type')->nullable();
            $table->string('second_penalty_charges')->nullable();
            $table->boolean('third_penalty')->default(false);
            $table->integer('third_penalty_days')->nullable();
            $table->string('third_penalty_type')->nullable();
            $table->string('third_penalty_charges')->nullable();
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
