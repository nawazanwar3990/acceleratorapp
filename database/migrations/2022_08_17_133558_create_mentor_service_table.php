<?php

use App\Enum\TableEnum;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create(TableEnum::MENTOR_SERVICE, function (Blueprint $table) {
            $table->id();
            $table->foreignId('mentor_id')->nullable()->constrained(TableEnum::MENTORS);
            $table->foreignId('service_id')->nullable()->constrained(TableEnum::SERVICES);
            $table->string('service_type')->nullable();
            $table->string('service_name')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists(TableEnum::MENTOR_SERVICE);
    }
};
