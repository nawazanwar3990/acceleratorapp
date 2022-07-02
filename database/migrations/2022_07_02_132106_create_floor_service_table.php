<?php

use App\Enum\TableEnum;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create(TableEnum::FLOOR_SERVICE, function (Blueprint $table) {
            $table->id();
            $table->foreignId('floor_id')->nullable()->constrained(TableEnum::FLOORS);
            $table->foreignId('service_id')->nullable()->constrained(TableEnum::SERVICES);
            $table->string('type')->nullable();
            $table->foreignId('created_by')->nullable()->constrained(TableEnum::USERS);
            $table->foreignId('updated_by')->nullable()->constrained(TableEnum::USERS);
            $table->foreignId('deleted_by')->nullable()->constrained(TableEnum::USERS);
            $table->softDeletes();
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists(TableEnum::FLOOR_SERVICE);
    }
};
