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
        Schema::create(TableEnum::EMPLOYEES, function (Blueprint $table) {
            $table->id();
            $table->foreignId('hr_id')->nullable()->constrained(TableEnum::HRS);
            $table->string('salary_type')->nullable();
            $table->decimal('salary', 30, 2)->nullable();
            $table->decimal('loan_percentage', 30, 2)->nullable();
            $table->integer('working_hours')->nullable();
            $table->foreignId('department_id')->nullable()->constrained(TableEnum::HR_DEPARTMENT);
            $table->foreignId('designation_id')->nullable()->constrained(TableEnum::HR_DESIGNATION);

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
        Schema::dropIfExists(TableEnum::EMPLOYEES);
    }
};
