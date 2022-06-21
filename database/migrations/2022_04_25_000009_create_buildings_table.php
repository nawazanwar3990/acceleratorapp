<?php

use App\Enum\TableEnum;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBuildingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(TableEnum::BUILDINGS, function (Blueprint $table) {
            $table->id();
            $table->foreignId('business_id')->nullable();
            $table->string('name')->nullable();
            $table->string('area')->nullable();
            $table->string('length')->nullable();
            $table->string('width')->nullable();
            $table->string('building_corners')->nullable();
            $table->string('building_type')->nullable();
            $table->string('entry_gates')->nullable();
            $table->string('property_type')->nullable();
            $table->string('no_of_floors')->nullable();
            $table->string('facing')->nullable();
            $table->json('general_services')->nullable();
            $table->json('security_services')->nullable();
            $table->boolean('status')->default(true);

            $table->string('d1')->nullable();
            $table->string('d2')->nullable();
            $table->string('d3')->nullable();
            $table->string('d4')->nullable();
            $table->string('d5')->nullable();
            $table->string('d6')->nullable();

            $table->string('street1')->nullable();
            $table->string('street2')->nullable();
            $table->string('street3')->nullable();
            $table->string('street4')->nullable();
            $table->string('street5')->nullable();
            $table->string('street6')->nullable();

            $table->string('x1')->nullable();
            $table->string('x2')->nullable();
            $table->string('x3')->nullable();
            $table->string('x4')->nullable();
            $table->string('x5')->nullable();
            $table->string('x6')->nullable();

            $table->string('y1')->nullable();
            $table->string('y2')->nullable();
            $table->string('y3')->nullable();
            $table->string('y4')->nullable();
            $table->string('y5')->nullable();
            $table->string('y6')->nullable();

            $table->foreignId('created_by')->nullable();
            $table->foreignId('updated_by')->nullable();
            $table->foreignId('deleted_by')->nullable();
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
        Schema::dropIfExists(TableEnum::BUILDINGS);
    }
};
