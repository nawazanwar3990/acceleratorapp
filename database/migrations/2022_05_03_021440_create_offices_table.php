<?php

use App\Enum\TableEnum;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create(TableEnum::OFFICES, function (Blueprint $table) {
            $table->id();
            $table->foreignId('building_id')->nullable()->constrained(TableEnum::BUILDINGS);
            $table->foreignId('floor_id')->nullable()->constrained(TableEnum::FLOORS);
            $table->foreignId('type_id')->nullable()->constrained(TableEnum::OFFICE_TYPES);
            $table->string('name')->nullable();
            $table->string('number')->nullable();
            $table->boolean('status')->nullable()->default(true);
            $table->string('facing')->nullable();
            $table->string('view')->nullable();
            $table->string('accommodation')->nullable();
            $table->boolean('furnished')->nullable()->default(true);
            $table->longText('furnished_details')->nullable();
            $table->string('length')->nullable();
            $table->string('width')->nullable();
            $table->string('area')->nullable();
            $table->string('height')->nullable();
            $table->foreignId('created_by')->nullable()->constrained(TableEnum::USERS);
            $table->foreignId('updated_by')->nullable()->constrained(TableEnum::USERS);
            $table->foreignId('deleted_by')->nullable()->constrained(TableEnum::USERS);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists(TableEnum::OFFICES);
    }
};
