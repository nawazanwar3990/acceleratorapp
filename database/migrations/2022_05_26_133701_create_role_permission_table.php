<?php

use App\Enum\TableEnum;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(TableEnum::ROLE_PERMISSION, function (Blueprint $table) {
            $table->id();
            $table->foreignId('building_id')->nullable()->constrained(TableEnum::BUILDINGS);
            $table->foreignId('role_id')->nullable()->constrained(TableEnum::ROLES);
            $table->foreignId('permission_id')->nullable()->constrained(TableEnum::PERMISSIONS);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists(TableEnum::ROLE_PERMISSION);
    }
};
