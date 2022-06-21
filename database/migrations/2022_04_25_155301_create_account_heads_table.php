<?php

use App\Enum\TableEnum;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(TableEnum::ACCOUNT_HEADS, function (Blueprint $table) {
            $table->id();
            $table->foreignId('HeadCode');
            $table->string('HeadName');
            $table->string('PHeadName');
            $table->integer('HeadLevel');
            $table->string('HeadType')->nullable();
            $table->boolean('IsActive')->nullable()->default(true);
            $table->boolean('IsTransaction')->nullable();
            $table->boolean('IsGL')->nullable();
            $table->boolean('IsBudget')->nullable();
            $table->boolean('IsDepreciation')->nullable();
            $table->json('account_id')->nullable();
            $table->string('account_type')->nullable();
            $table->decimal('DepreciationRate', 30, 2)->nullable();
            $table->foreignId('created_by')->nullable()->constrained(TableEnum::USERS);
            $table->foreignId('updated_by')->nullable()->constrained(TableEnum::USERS);
            $table->foreignId('deleted_by')->nullable()->constrained(TableEnum::USERS);
            $table->foreignId('building_id')->nullable()->constrained(TableEnum::BUILDINGS);
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
        Schema::dropIfExists(TableEnum::ACCOUNT_HEADS);
    }
};
