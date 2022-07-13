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
            $table->foreignId('user_id')->nullable();
            $table->string('first_name')->nullable();
            $table->string('middle_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('email')->nullable();
            $table->string('cnic')->nullable();
            $table->string('guardian_name')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->string('gender')->nullable();
            $table->string('marital_status')->nullable();
            $table->string('cell_1')->nullable();
            $table->string('cell_2')->nullable();

            $table->string('web_portfolio')->nullable();
            $table->string('remarks')->nullable();

            $table->longText('address')->nullable();

            $table->foreignId('created_by')->nullable();
            $table->foreignId('updated_by')->nullable();
            $table->foreignId('deleted_by')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists(TableEnum::HRS);
    }
};
