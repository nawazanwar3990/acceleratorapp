<?php

use App\Enum\TableEnum;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table(TableEnum::PACKAGES, function (Blueprint $table) {
            if (!Schema::hasColumn(TableEnum::PACKAGES, 'status')) {
                $table->boolean('status')->after('price')->default(true);
            }
        });
        Schema::table(TableEnum::PLANS, function (Blueprint $table) {
            if (!Schema::hasColumn(TableEnum::PLANS, 'status')) {
                $table->boolean('status')->after('price')->default(true);
            }
        });
    }
    public function down()
    {

    }
};
