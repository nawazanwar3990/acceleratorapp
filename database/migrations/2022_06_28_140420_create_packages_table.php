<?php

use App\Enum\AcceleratorServiceEnum;
use App\Enum\PackageTypeEnum;
use App\Enum\RoleEnum;
use App\Enum\TableEnum;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create(TableEnum::PACKAGES, function (Blueprint $table) {
            $table->id();
            $table->enum('type', PackageTypeEnum::getValues())->default(PackageTypeEnum::FREE);
            $table->string('name')->nullable();
            $table->foreignId('duration_type_id')->nullable()->constrained(TableEnum::DURATIONS);
            $table->string('duration_limit')->nullable();
            $table->string('trail_expire_date')->nullable();
            $table->string('slug')->nullable();
            $table->string('price')->nullable();
            $table->integer('reminder_days')->nullable();
            $table->foreignId('created_by')->nullable()->constrained(TableEnum::USERS);
            $table->foreignId('updated_by')->nullable()->constrained(TableEnum::USERS);
            $table->foreignId('deleted_by')->nullable()->constrained(TableEnum::USERS);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists(TableEnum::PACKAGES);
    }
};
