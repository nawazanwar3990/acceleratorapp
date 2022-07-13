<?php

use App\Enum\TableEnum;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBuildingsTable extends Migration
{
    public function up()
    {
        Schema::create(TableEnum::BUILDINGS, function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('area')->nullable();
            $table->string('length')->nullable();
            $table->string('width')->nullable();
            $table->string('building_type')->nullable();
            $table->string('entry_gates')->nullable();
            $table->string('no_of_floors')->nullable();
            $table->string('facing')->nullable();
            $table->boolean('status')->default(true);
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
