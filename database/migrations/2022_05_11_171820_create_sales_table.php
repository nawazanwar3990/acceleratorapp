<?php

use App\Enum\TableEnum;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create(TableEnum::SALES, function (Blueprint $table) {
            $table->id();
            $table->foreignId('building_id')->nullable()->constrained(TableEnum::BUILDINGS);
            $table->foreignId('floor_id')->nullable()->constrained(TableEnum::FLOORS);
            $table->foreignId('flat_id')->nullable()->constrained(TableEnum::FLATS);
            $table->foreignId('installment_plan_id')->nullable()->constrained(TableEnum::INSTALLMENT_PLANS);
            $table->date('date')->nullable();
            $table->string('transfer_no')->nullable();
            $table->integer('revision_no')->nullable();
            $table->string('transfer_type')->nullable();
            $table->string('transfer_sub_type')->nullable();
            $table->string('payment_method')->nullable();
            $table->string('payment_sub_method')->nullable();
            $table->decimal('total_amount', 30, 2)->nullable();
            $table->string('discount')->nullable();
            $table->decimal('discount_value', 30, 2)->nullable();
            $table->decimal('discount_amount', 30, 2)->nullable();
            $table->decimal('after_discount_amount', 30, 2)->nullable();
            $table->decimal('down_payment', 30, 2)->nullable();
            $table->decimal('balance', 30, 2)->nullable();
            $table->string('status')->nullable();
            $table->decimal('total_broker_percentage', 30, 2)->nullable();
            $table->decimal('total_broker_amount', 30, 2)->nullable();
            $table->decimal('transfer_fee', 30, 2)->nullable();
            $table->boolean('company_brokery')->default(false);
            $table->string('commodity_type_id')->nullable();
            $table->string('commodity_sub_type_id')->nullable();
            $table->decimal('commodity_adjustment_value', 30, 2)->nullable();
            $table->longText('remarks', 30, 2)->nullable();
            $table->string('document_1')->nullable();
            $table->string('document_2')->nullable();
            $table->string('image_1')->nullable();
            $table->string('image_2')->nullable();
            $table->foreignId('created_by')->nullable()->constrained(TableEnum::USERS);
            $table->foreignId('updated_by')->nullable()->constrained(TableEnum::USERS);
            $table->foreignId('deleted_by')->nullable()->constrained(TableEnum::USERS);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists(TableEnum::SALES);
    }
};
