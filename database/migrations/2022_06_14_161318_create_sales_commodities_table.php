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
        Schema::create(TableEnum::SALES_COMMODITIES, function (Blueprint $table) {
            $table->id();
            $table->foreignId('sale_id')->nullable()->constrained(TableEnum::SALES);
            $table->string('type')->nullable();
            $table->string('size')->nullable();
            $table->string('unit')->nullable();
            $table->string('construction_status')->nullable();
            $table->string('property_type')->nullable();
            $table->string('price')->nullable();
            $table->string('total_price')->nullable();
            $table->string('in_form_of')->nullable();
            $table->string('model')->nullable();
            $table->string('make')->nullable();
            $table->string('color')->nullable();
            $table->string('chassis_no')->nullable();
            $table->string('reg_no')->nullable();

            $table->longText('remarks')->nullable();

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
        Schema::dropIfExists(TableEnum::SALES_COMMODITIES);
    }
};
