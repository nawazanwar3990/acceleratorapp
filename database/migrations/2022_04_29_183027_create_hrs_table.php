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
            $table->string('gender')->nullable();
            $table->string('marital_status')->nullable();
            $table->foreignId('organization_id')->nullable()->constrained(TableEnum::HR_ORGANIZATIONS);
            $table->foreignId('department_id')->nullable()->constrained(TableEnum::HR_DEPARTMENT);
            $table->foreignId('profession_id')->nullable()->constrained(TableEnum::HR_PROFESSIONS);
            $table->string('cell_1')->nullable();
            $table->string('cell_2')->nullable();
            $table->string('cell_whats_app')->nullable();
            $table->string('landline')->nullable();
            $table->string('email')->nullable();
            $table->string('facebook')->nullable();
            $table->string('sec_contact_full_name')->nullable();
            $table->foreignId('sec_contact_relation')->nullable()->constrained(TableEnum::HR_RELATIONS);
            $table->string('sec_contact')->nullable();
            $table->foreignId('country_id')->nullable()->constrained(TableEnum::COUNTRIES);
            $table->foreignId('province_id')->nullable()->constrained(TableEnum::PROVINCES);
            $table->foreignId('district_id')->nullable()->constrained(TableEnum::DISTRICTS);
            $table->string('street_no')->nullable();
            $table->string('house_no')->nullable();
            $table->string('postal_code')->nullable();
            $table->string('post_office')->nullable();
            $table->longText('address')->nullable();
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
