<?php

use App\Enum\TableEnum;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create(TableEnum::HRS, function (Blueprint $table) {
            $table->id();
            $table->string('hr_no')->nullable();
            $table->foreignId('user_id')->nullable();
            $table->string('first_name')->nullable();
            $table->string('middle_name')->nullable();
            $table->string('last_name')->nullable();
            $table->foreignId('relation_id')->nullable()->constrained(TableEnum::HR_RELATIONS);
            $table->string('relation_first_name')->nullable();
            $table->string('relation_middle_name')->nullable();
            $table->string('relation_last_name')->nullable();
            $table->string('cnic')->nullable();
            $table->string('passport_number')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->foreignId('cast_id')->nullable()->constrained(TableEnum::HR_CASTS);
            $table->foreignId('nationality_id')->nullable()->constrained(TableEnum::HR_NATIONALITIES);
            $table->foreignId('country_stay_in')->nullable()->constrained(TableEnum::COUNTRIES);
            $table->string('gender')->nullable();
            $table->string('marital_status')->nullable();
            $table->string('employee_type_id')->nullable();
            $table->foreignId('employee_sub_type_id')->nullable();
            $table->foreignId('tax_type_id')->nullable()->constrained(TableEnum::HR_TAX_TYPES);
            $table->foreignId('tax_status_id')->nullable()->constrained(TableEnum::HR_TAX_STATUSES);
            $table->string('tax_no')->nullable();
            $table->foreignId('federal_provincial_id')->nullable()->constrained(TableEnum::PROVINCES);
            $table->foreignId('ministry_id')->nullable()->constrained(TableEnum::HR_MINISTRIES);
            $table->foreignId('govt_organization_id')->nullable()->constrained(TableEnum::HR_ORGANIZATIONS);
            $table->foreignId('govt_department_id')->nullable()->constrained(TableEnum::HR_DEPARTMENT);
            $table->string('govt_current_last_served')->nullable();
            $table->string('govt_grade_id')->nullable();
            $table->foreignId('govt_profession_id')->nullable()->constrained(TableEnum::HR_PROFESSIONS);
            $table->string('govt_serving_retired')->nullable();
            $table->date('govt_date_of_joining')->nullable();
            $table->date('govt_date_of_retirement')->nullable();
            $table->foreignId('private_organization_id')->nullable()->constrained(TableEnum::HR_ORGANIZATIONS);
            $table->foreignId('private_department_id')->nullable()->constrained(TableEnum::HR_DEPARTMENT);
            $table->string('private_current_last_served')->nullable();
            $table->string('private_grade_id')->nullable();
            $table->foreignId('private_profession_id')->nullable()->constrained(TableEnum::HR_PROFESSIONS);
            $table->string('private_serving_retired')->nullable();
            $table->date('private_date_of_joining')->nullable();
            $table->date('private_date_of_retirement')->nullable();
            $table->string('own_business')->nullable();
            $table->string('owner_partner')->nullable();
            $table->foreignId('own_business_id')->nullable()->constrained(TableEnum::HR_BUSINESSES);
            $table->foreignId('own_business_sub_id')->nullable()->constrained(TableEnum::HR_BUSINESSES);
            $table->string('cell_1')->nullable();
            $table->string('cell_2')->nullable();
            $table->string('cell_whats_app')->nullable();
            $table->string('landline')->nullable();
            $table->string('email')->nullable();
            $table->string('facebook')->nullable();
            $table->string('sec_contact_full_name')->nullable();
            $table->foreignId('sec_contact_relation')->nullable()->constrained(TableEnum::HR_RELATIONS);
            $table->string('sec_contact')->nullable();

            $table->foreignId('present_country_id')->nullable()->constrained(TableEnum::COUNTRIES);
            $table->foreignId('present_province_id')->nullable()->constrained(TableEnum::PROVINCES);
            $table->foreignId('present_district_id')->nullable()->constrained(TableEnum::DISTRICTS);
            $table->foreignId('present_tehsil_id')->nullable()->constrained(TableEnum::TEHSILS);
            $table->foreignId('present_colony_id')->nullable()->constrained(TableEnum::COLONIES);
            $table->string('present_block')->nullable();
            $table->string('present_chak_name')->nullable();
            $table->string('present_chak_no')->nullable();
            $table->string('present_sector')->nullable();
            $table->string('present_street_no')->nullable();
            $table->string('present_house_no')->nullable();
            $table->string('present_postal_code')->nullable();
            $table->string('present_post_office')->nullable();
            $table->string('present_near_by')->nullable();
            $table->longText('present_linear_address')->nullable();

            $table->foreignId('permanent_country_id')->nullable()->constrained(TableEnum::COUNTRIES);
            $table->foreignId('permanent_province_id')->nullable()->constrained(TableEnum::PROVINCES);
            $table->foreignId('permanent_district_id')->nullable()->constrained(TableEnum::DISTRICTS);
            $table->foreignId('permanent_tehsil_id')->nullable()->constrained(TableEnum::TEHSILS);
            $table->foreignId('permanent_colony_id')->nullable()->constrained(TableEnum::COLONIES);
            $table->string('permanent_block')->nullable();
            $table->string('permanent_chak_name')->nullable();
            $table->string('permanent_chak_no')->nullable();
            $table->string('permanent_sector')->nullable();
            $table->string('permanent_street_no')->nullable();
            $table->string('permanent_house_no')->nullable();
            $table->string('permanent_postal_code')->nullable();
            $table->string('permanent_post_office')->nullable();
            $table->string('permanent_near_by')->nullable();
            $table->longText('permanent_linear_address')->nullable();

            $table->longText('left_thumb_code')->nullable();
            $table->longText('left_index_code')->nullable();
            $table->longText('left_middle_code')->nullable();
            $table->longText('left_ring_code')->nullable();
            $table->longText('left_little_code')->nullable();
            $table->longText('right_thumb_code')->nullable();
            $table->longText('right_index_code')->nullable();
            $table->longText('right_middle_code')->nullable();
            $table->longText('right_ring_code')->nullable();
            $table->longText('right_little_code')->nullable();

            $table->foreignId('created_by')->nullable()->constrained(TableEnum::USERS);
            $table->foreignId('updated_by')->nullable()->constrained(TableEnum::USERS);
            $table->foreignId('deleted_by')->nullable()->constrained(TableEnum::USERS);

            $table->softDeletes();
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists(TableEnum::HRS);
    }
};
