<?php

use App\Enum\TableEnum;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create(TableEnum::FLAT_SERVICE, function (Blueprint $table) {
            $table->id();
            $table->foreignId('flat_id')->nullable()->constrained(TableEnum::FLATS);
            $table->foreignId('service_id')->nullable()->constrained(TableEnum::SERVICES);
            $table->string('type')->nullable();
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists(TableEnum::FLAT_SERVICE);
    }
};
