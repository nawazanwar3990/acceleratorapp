<?php

use App\Enum\TableEnum;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table(TableEnum::PAYMENTS, function (Blueprint $table) {
            if (!Schema::hasColumn(TableEnum::PAYMENTS, 'price')) {
                $table->string('price')->after('transaction_id')->nullable();
            }
        });
    }

    public function down()
    {
    }
};
