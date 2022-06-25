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
        Schema::create(TableEnum::INSTALLMENTS, function (Blueprint $table) {
            $table->id();
            $table->foreignId('flat_id')->nullable()->constrained(TableEnum::FLATS);
            $table->foreignId('sale_id')->nullable()->constrained(TableEnum::SALES);
            $table->foreignId('installment_plan_id')->nullable()->constrained(TableEnum::INSTALLMENT_PLANS);
            $table->string('installment_no')->nullable();
            $table->string('installment_serial')->nullable();
            $table->date('installment_date')->nullable();
            $table->decimal('installment_amount', 30, 2)->nullable();
            $table->boolean('first_penalty')->default(false);
            $table->decimal('first_penalty_amount', 30, 2)->nullable();
            $table->boolean('second_penalty')->default(false);
            $table->decimal('second_penalty_amount', 30, 2)->nullable();
            $table->boolean('third_penalty')->default(false);
            $table->decimal('third_penalty_amount', 30, 2)->nullable();
            $table->boolean('penalty_waived_off')->nullable();
            $table->decimal('penalty_waived_off_amount', 30, 2)->nullable();
            $table->date('paid_date')->nullable();
            $table->string('paid_voucher_no')->nullable();
            $table->string('status')->nullable();
            $table->longText('remarks')->nullable();

            $table->foreignId('created_by')->nullable()->constrained(TableEnum::USERS);
            $table->foreignId('updated_by')->nullable()->constrained(TableEnum::USERS);
            $table->foreignId('deleted_by')->nullable()->constrained(TableEnum::USERS);

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
        Schema::dropIfExists(TableEnum::INSTALLMENTS);
    }
};
