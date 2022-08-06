<?php

use App\Enum\EmployeeTypeEnum;
use App\Enum\PaymentTypeProcessEnum;
use App\Enum\TableEnum;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create(TableEnum::BA, function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->constrained(TableEnum::USERS);
            $table->string('type')->nullable();
            $table->string('payment_process')->nullable();
            $table->string('company_name')->nullable();
            $table->enum('is_register_company', ['yes', 'no'])->default('no');
            $table->json('company_institutes')->nullable();
            $table->string('company_no_of_emp')->nullable();
            $table->string('company_date_of_initiation')->nullable();
            $table->longText('company_address')->nullable();
            $table->string('company_contact_no')->nullable();
            $table->string('company_email')->nullable();

            $table->json('services')->nullable();
            $table->json('other_services')->nullable();

            $table->string('ba_father_name')->nullable();
            $table->string('ba_contact')->nullable();
            $table->string('ba_emergency_contact')->nullable();
            $table->string('ba_postal_code')->nullable();


            $table->enum('ba_already_emp', ['yes', 'no'])->default('no');
            $table->enum('ba_emp_type', EmployeeTypeEnum::getValues())->default(EmployeeTypeEnum::ONLINE);


            $table->string('ba_emp_location')->nullable();
            $table->string('ba_emp_timing')->nullable();
            $table->string('ba_emp_designation')->nullable();
            $table->text('ba_emp_description')->nullable();

            $table->foreignId('created_by')->nullable();
            $table->foreignId('updated_by')->nullable();
            $table->foreignId('deleted_by')->nullable();

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists(TableEnum::BA);
    }
};
