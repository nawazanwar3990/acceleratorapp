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
        Schema::create('power_of_attorneys', function (Blueprint $table) {
            $table->id();

            $table->string('attorney_purpose')->nullable();
            $table->date('reg_date')->nullable();
            $table->foreignId('executant_hr_id')->nullable()->constrained(TableEnum::HRS);
            $table->foreignId('auth_attorney_hr_id')->nullable()->constrained(TableEnum::HRS);
            $table->foreignId('relation_type_id')->nullable();
            $table->foreignId('flat_id')->nullable()->constrained(TableEnum::FLATS);

            $table->string('is_attested')->nullable();
            $table->foreignId('attested_by_person_id')->nullable()->constrained(TableEnum::HRS);
            $table->date('attested_date')->nullable();
            $table->string('attested_dairy_number')->nullable();
            $table->string('attested_narration_remark')->nullable();

            $table->string('is_reg_at_sub_reg_office')->nullable();
            $table->date('rso_reg_date')->nullable();
            $table->string('rso_reg_number')->nullable();
            $table->string('rso_narration_remark')->nullable();

            $table->string('is_process_through_embassy')->nullable();
            $table->string('pte_situated_in')->nullable();
            $table->foreignId('pte_by_person_id')->nullable()->constrained(TableEnum::HRS);
            $table->date('pte_reg_date')->nullable();
            $table->string('pte_dairy_number')->nullable();
            $table->string('pte_witness_1_name')->nullable();
            $table->string('pte_witness_1_cnic')->nullable();
            $table->string('pte_witness_1_contact')->nullable();
            $table->string('pte_witness_2_name')->nullable();
            $table->string('pte_witness_2_cnic')->nullable();
            $table->string('pte_witness_2_contact')->nullable();

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
        Schema::dropIfExists('power_of_attorneys');
    }
};
