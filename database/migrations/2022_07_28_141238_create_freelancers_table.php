<?php

use App\Enum\EmployeeTypeEnum;
use App\Enum\EmploymentTypeEnum;
use App\Enum\PaymentTypeProcessEnum;
use App\Enum\TableEnum;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create(TableEnum::FREELANCERS, function (Blueprint $table) {

            $table->id();

            $table->foreignId('user_id')->nullable()->constrained(TableEnum::USERS);
            $table->string('type')->nullable();
            $table->string('payment_process')->nullable();
            $table->string('sp_name')->nullable();

            $table->string('company_name')->nullable();
            $table->enum('is_register_company', ['yes', 'no'])->default('no');
            $table->json('affiliations')->nullable();
            $table->string('company_no_of_emp')->nullable();
            $table->string('company_date_of_initiation')->nullable();
            $table->longText('company_address')->nullable();
            $table->string('company_contact_no')->nullable();
            $table->string('company_email')->nullable();

            $table->string('f_father_name')->nullable();
            $table->string('f_contact')->nullable();
            $table->string('f_emergency_contact')->nullable();

            $table->string('f_postal_code')->nullable();


            $table->enum('f_already_emp',['yes','no'])->default('no');
            $table->enum('f_emp_type', EmployeeTypeEnum::getValues())->default(EmployeeTypeEnum::ONLINE);


            $table->string('f_emp_location')->nullable();
            $table->string('f_emp_timing')->nullable();
            $table->string('f_emp_designation')->nullable();
            $table->text('f_emp_description')->nullable();

            $table->foreignId('created_by')->nullable();
            $table->foreignId('updated_by')->nullable();
            $table->foreignId('deleted_by')->nullable();

            $table->timestamps();

        });
    }

    public function down()
    {
        Schema::dropIfExists(TableEnum::FREELANCERS);
    }
};
