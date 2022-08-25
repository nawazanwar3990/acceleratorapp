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
            $table->text('limit')->default('0');
            $table->text('building_limit')->default('0');
            $table->text('floor_limit')->default('0');
            $table->text('office_limit')->default('0');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists(TableEnum::PACKAGE_SERVICE);
    }
};

