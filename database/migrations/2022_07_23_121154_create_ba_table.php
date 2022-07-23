<?php

use App\Enum\TableEnum;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create(TableEnum::BA, function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->constrained(TableEnum::USERS);

            $table->string('type')->nullable();

            $table->string('company_name')->nullable();
            $table->enum('is_register_company',['yes','no'])->default('no');
            $table->json('company_institutes')->nullable();
            $table->string('company_no_of_emp')->nullable();
            $table->string('company_rate_of_initiation')->nullable();
            $table->longText('company_address')->nullable();
            $table->string('company_contact_no')->nullable();
            $table->string('company_email')->nullable();

            $table->string('security_question_name')->nullable();
            $table->string('security_question_value')->nullable();
            $table->string('know_about_us')->nullable();
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists(TableEnum::BA);
    }
};
