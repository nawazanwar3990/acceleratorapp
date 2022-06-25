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
        Schema::create(TableEnum::EMPLOYEE_LOANS, function (Blueprint $table) {
            $table->id();
            $table->string('loan_no')->nullable();
            $table->foreignId('employee_id')->nullable()->constrained(TableEnum::EMPLOYEES);
            $table->date('date')->nullable();
            $table->decimal('loan_amount')->nullable();
            $table->integer('return_type')->nullable();
            $table->date('return_date')->nullable();
            $table->integer('deduct_type')->nullable();
            $table->decimal('deduct_value', 30, 2)->nullable();
            $table->decimal('deduct_amount', 30, 2)->nullable();
            $table->integer('status')->nullable();
            $table->longText('status_details')->nullable();
            $table->longText('details')->nullable();

            $table->foreignId('requested_by')->nullable()->constrained(TableEnum::USERS);
            $table->foreignId('approved_by')->nullable()->constrained(TableEnum::USERS);
            $table->timestamp('approved_at')->nullable();
            $table->timestamp('received_at')->nullable();
            $table->foreignId('received_by')->nullable()->constrained(TableEnum::EMPLOYEES);

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
        Schema::dropIfExists(TableEnum::EMPLOYEE_LOANS);
    }
};
