<?php

use App\Enum\TableEnum;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create(TableEnum::BA_SERVICE, function (Blueprint $table) {
            $table->id();
            $table->foreignId('ba_id')->nullable()->constrained(TableEnum::BA);
            $table->foreignId('service_id')->nullable()->constrained(TableEnum::SERVICES);
            $table->string('service_type')->nullable();
            $table->string('service_name')->nullable();
            $table->text('limit')->nullable();
            $table->text('building_limit')->nullable();
            $table->text('floor_limit')->nullable();
            $table->text('office_limit')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists(TableEnum::BA_SERVICE);
    }
};
