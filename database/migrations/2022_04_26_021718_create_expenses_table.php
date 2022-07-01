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
        Schema::create(TableEnum::EXPENSES, function (Blueprint $table) {
            $table->id();
            $table->string('voucher_no')->nullable();
            $table->date('date')->nullable();
            $table->foreignId('expense_head_id')->nullable()->constrained(TableEnum::EXPENSE_HEADS);
            $table->foreignId('payment_account')->nullable()->constrained(TableEnum::ACCOUNT_HEADS);
            $table->decimal('amount',30,2)->nullable();
            $table->longText('description')->nullable();
            $table->boolean('is_paid')->nullable()->default(false);
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
        Schema::dropIfExists(TableEnum::EXPENSES);
    }
};
