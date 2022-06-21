<?php

use App\Enum\TableEnum;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(TableEnum::QUOTATIONS, function (Blueprint $table) {
            $table->id();
            $table->date('date')->nullable();
            $table->string('quot_no')->nullable();
            $table->string('customer_name')->nullable();
            $table->string('customer_contact')->nullable();
            $table->foreignId('floor_id')->nullable()->constrained(TableEnum::FLOORS);
            $table->foreignId('flat_id')->nullable()->constrained(TableEnum::FLATS);
            $table->string('payment_method')->nullable();
            $table->string('payment_sub_method')->nullable();
            $table->decimal('total_amount', 30, 2)->nullable();
            $table->string('payment_type')->nullable();
            $table->string('payment_value')->nullable();
            $table->decimal('payment_amount', 30, 2)->nullable();
            $table->foreignId('installment_plan_id')->nullable()->constrained(TableEnum::INSTALLMENT_PLANS);
            $table->decimal('installment_amount', 30, 2)->nullable();
            $table->string('status')->nullable();

            $table->foreignId('created_by')->nullable()->constrained(TableEnum::USERS);
            $table->foreignId('updated_by')->nullable()->constrained(TableEnum::USERS);
            $table->foreignId('deleted_by')->nullable()->constrained(TableEnum::USERS);
            $table->foreignId('building_id')->nullable()->constrained(TableEnum::BUILDINGS);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists(TableEnum::QUOTATIONS);
    }
};
