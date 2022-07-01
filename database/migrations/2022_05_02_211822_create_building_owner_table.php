<?php

use App\Enum\TableEnum;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(TableEnum::BUILDING_OWNER, function (Blueprint $table) {
            $table->id();
            $table->foreignId('building_id')->nullable()->constrained(TableEnum::BUILDINGS);
            $table->foreignId('hr_id')->nullable()->constrained(TableEnum::HRS);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists(TableEnum::BUILDING_OWNER);
    }
};
