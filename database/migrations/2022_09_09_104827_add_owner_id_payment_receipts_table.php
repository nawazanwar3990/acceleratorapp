<?php

use App\Enum\TableEnum;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table(TableEnum::PAYMENT_RECEIPTS, function (Blueprint $table) {
            if (!Schema::hasColumn(TableEnum::PAYMENT_RECEIPTS, 'owner_id')) {
                $table->foreignId('owner_id')->after('id')->nullable();
            }
        });
    }
    public function down()
    {
        //
    }
};
