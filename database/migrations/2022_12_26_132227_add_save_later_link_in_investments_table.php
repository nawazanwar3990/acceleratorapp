<?php

use App\Enum\TableEnum;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table(TableEnum::INVESTMENTS, function (Blueprint $table) {
            if (!Schema::hasColumn(TableEnum::INVESTMENTS, 'save_later_link')) {
                $table->longText('save_later_link')->after('mentors')->nullable();
            }
        });
    }
    public function down()
    {
    }
};
