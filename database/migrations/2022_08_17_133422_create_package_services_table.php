<?php

use App\Enum\TableEnum;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    public function up()
    {
        Schema::create(TableEnum::PACKAGE_SERVICE, function (Blueprint $table) {
            $table->id();
            $table->foreignId('package_id')->nullable()->constrained(TableEnum::PACKAGES);
            $table->foreignId('service_id')->nullable()->constrained(TableEnum::SERVICES);
            $table->string('limit')->nullable();

            $table->string('building_limit')->nullable();
            $table->string('floor_limit')->nullable();
            $table->string('office_limit')->nullable();

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists(TableEnum::PACKAGE_SERVICE);
    }
};

