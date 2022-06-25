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
        Schema::create(TableEnum::SALARIES, function (Blueprint $table) {
            $table->id();
            $table->string('salary_no')->nullable();
            $table->foreignId('employee_id')->nullable()->constrained(TableEnum::EMPLOYEES);
            $table->string('salary_month')->nullable();
            $table->decimal('total_salary', 30, 2)->nullable();
            $table->decimal('paid_salary', 30, 2)->nullable();
            $table->integer('attendance')->nullable();
            $table->integer('present')->nullable();
            $table->decimal('deduction', 30, 2)->nullable();
            $table->integer('deduction_type')->nullable();
            $table->text('deduction_reason')->nullable();
            $table->foreignId('generated_by')->nullable()->constrained(TableEnum::USERS);
            $table->foreignId('paid_by')->nullable()->nullable()->constrained(TableEnum::USERS);
            $table->date('paid_at')->nullable();
            $table->foreignId('received_by')->nullable()->constrained(TableEnum::EMPLOYEES);
            $table->string('type')->nullable();
            $table->string('status')->nullable();

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
        Schema::dropIfExists(TableEnum::SALARIES);
    }
};
