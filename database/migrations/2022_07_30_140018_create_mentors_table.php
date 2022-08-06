<?php

use App\Enum\PaymentTypeProcessEnum;
use App\Enum\TableEnum;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create(TableEnum::MENTORS, function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->constrained(TableEnum::USERS);
            $table->string('payment_process')->nullable();
            $table->string('m_father_name')->nullable();
            $table->string('m_contact')->nullable();
            $table->string('m_emergency_contact')->nullable();
            $table->string('m_postal_code')->nullable();
            $table->json('services')->nullable();
            $table->json('other_services')->nullable();
            $table->foreignId('created_by')->nullable();
            $table->foreignId('updated_by')->nullable();
            $table->foreignId('deleted_by')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists(TableEnum::MENTORS);
    }
};
