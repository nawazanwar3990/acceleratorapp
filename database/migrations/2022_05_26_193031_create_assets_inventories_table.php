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
        Schema::create(TableEnum::ASSETS_INVENTORIES, function (Blueprint $table) {
            $table->id();

            $table->string('asset_code')->nullable();
            $table->string('asset_name')->nullable();
            $table->integer('quantity')->nullable();
            $table->string('series_model')->nullable();
            $table->foreignId('assets_unit_id')->nullable()->constrained(TableEnum::ASSETS_UNITS);
            $table->string('assets_group_id')->nullable();
            $table->foreignId('hr_id')->nullable()->constrained(TableEnum::HRS);
            $table->foreignId('assets_location_id')->nullable()->constrained(TableEnum::ASSETS_LOCATION);
            $table->string('date_of_purchase')->nullable();
            $table->string('warranty_period')->nullable();
            $table->integer('unit_price')->nullable();
            $table->string('depreciation')->nullable();
            $table->string('description')->nullable();
            $table->string('attachment')->nullable();



            $table->foreignId('created_by')->nullable()->constrained(TableEnum::USERS);
            $table->foreignId('updated_by')->nullable()->constrained(TableEnum::USERS);
            $table->foreignId('deleted_by')->nullable()->constrained(TableEnum::USERS);
            $table->foreignId('building_id')->nullable()->constrained(TableEnum::BUILDINGS);
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
        Schema::dropIfExists('assets_inventories');
    }
};
