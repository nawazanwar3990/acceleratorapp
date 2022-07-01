<?php

use App\Enum\TableEnum;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create(TableEnum::FLAT_OWNER, function (Blueprint $table) {
            $table->id();
            $table->foreignId('hr_id')->nullable()->constrained(TableEnum::HRS);
            $table->foreignId('flat_id')->nullable()->constrained(TableEnum::FLATS);
            $table->foreignId('sale_id')->nullable()->constrained(TableEnum::SALES);
            $table->string('percentage')->nullable();
            $table->boolean('status')->default(false);
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists(TableEnum::FLAT_OWNER);
    }
};
