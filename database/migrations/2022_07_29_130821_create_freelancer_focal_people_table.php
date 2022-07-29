<?php

use App\Enum\EmploymentTypeEnum;
use App\Enum\TableEnum;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create(TableEnum::FREELANCER_FOCAL_PERSON, function (Blueprint $table) {
            $table->id();
            $table->foreignId('freelancer_id')->nullable()->constrained(TableEnum::FREELANCERS);
            $table->string('fp_name')->nullable();
            $table->string('fp_designation')->nullable();
            $table->enum('fp_emp_type', EmploymentTypeEnum::getValues())->default(EmploymentTypeEnum::CONTRACT);
            $table->string('fp_contact')->nullable();
            $table->string('fp_email')->nullable();
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists(TableEnum::FREELANCER_FOCAL_PERSON);
    }
};
