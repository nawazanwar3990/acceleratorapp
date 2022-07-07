<?php

use App\Enum\TableEnum;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create(TableEnum::HR_JOB, function (Blueprint $table) {
            $table->id();
            $table->foreignId('hr_id')->nullable()->constrained(TableEnum::HRS);

            $table->string('designation')->nullable();
            $table->string('from')->nullable();
            $table->string('till')->nullable();
            $table->string('expertise')->nullable();

            $table->foreignId('created_by')->nullable()->constrained(TableEnum::USERS);
            $table->foreignId('updated_by')->nullable()->constrained(TableEnum::USERS);
            $table->foreignId('deleted_by')->nullable()->constrained(TableEnum::USERS);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists(TableEnum::HR_JOB);
    }
};
