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
        Schema::create(TableEnum::QUOTATION_INSTALLMENTS, function (Blueprint $table) {
            $table->id();
            $table->foreignId('flat_id')->nullable()->constrained(TableEnum::FLATS);
            $table->foreignId('quotation_id')->nullable()->constrained(TableEnum::QUOTATIONS);
            $table->foreignId('installment_plan_id')->nullable()->constrained(TableEnum::INSTALLMENT_PLANS);
            $table->string('installment_no')->nullable();
            $table->date('installment_date')->nullable();
            $table->decimal('installment_amount', 30, 2)->nullable();

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
        Schema::dropIfExists(TableEnum::QUOTATION_INSTALLMENTS);
    }
};
