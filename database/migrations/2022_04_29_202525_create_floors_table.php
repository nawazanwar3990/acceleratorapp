<?php

use App\Enum\TableEnum;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create(TableEnum::FLOORS, function (Blueprint $table) {
            $table->id();
            $table->string('floor_name')->nullable();
            $table->string('floor_number')->nullable();
            $table->foreignId('floor_type_id')->nullable()->constrained(TableEnum::FLOOR_TYPES);
            $table->string('length')->nullable();
            $table->string('width')->nullable();
            $table->string('area')->nullable();
            $table->string('height')->nullable();
            $table->integer('no_of_shops_flats')->nullable()->default(0);
            $table->foreignId('created_by')->nullable()->constrained(TableEnum::USERS);
            $table->foreignId('updated_by')->nullable()->constrained(TableEnum::USERS);
            $table->foreignId('deleted_by')->nullable()->constrained(TableEnum::USERS);
            $table->softDeletes();
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists(TableEnum::FLOORS);
    }
};
