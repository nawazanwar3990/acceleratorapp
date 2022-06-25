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
        Schema::create(TableEnum::FLAT_OWNERS, function (Blueprint $table) {
            $table->id();
            $table->foreignId('hr_id')->nullable()->constrained(TableEnum::HRS);
            $table->foreignId('flat_id')->nullable()->constrained(TableEnum::FLATS);
            $table->string('percentage')->nullable();
            $table->boolean('status')->default(false);
            $table->foreignId('sale_id')->nullable()->constrained(TableEnum::SALES);

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
        Schema::dropIfExists(TableEnum::FLAT_OWNERS);
    }
};
