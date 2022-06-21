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
        Schema::create(TableEnum::VOUCHER_PREFIXES, function (Blueprint $table) {
            $table->id();
            $table->string('type')->nullable();
            $table->string('full_name')->nullable();
            $table->string('prefix')->nullable();
            $table->BigInteger('number')->nullable();
            $table->foreignId('updated_by')->nullable()->constrained(TableEnum::USERS);
            $table->foreignId('building_id')->nullable()->constrained(TableEnum::BUILDINGS);
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
        Schema::dropIfExists(TableEnum::VOUCHER_PREFIXES);
    }
};
