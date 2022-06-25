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
        Schema::create(TableEnum::FLATS, function (Blueprint $table) {
            $table->id();
            $table->foreignId('floor_id')->nullable()->constrained(TableEnum::FLOORS);
            $table->string('flat_name')->nullable();
            $table->string('flat_number')->nullable();
            $table->foreignId('flat_type_id')->nullable()->constrained(TableEnum::FLAT_TYPES);
            $table->date('creation_date')->nullable();
            $table->boolean('status')->nullable()->default(true);
            $table->string('facing')->nullable();
            $table->string('view')->nullable();
            $table->string('accommodation')->nullable();
            $table->json('general_services')->nullable();
            $table->json('security_services')->nullable();
            $table->boolean('furnished')->nullable()->default(true);
            $table->longText('furnished_details')->nullable();
            $table->string('length')->nullable();
            $table->string('width')->nullable();
            $table->string('area')->nullable();
            $table->string('height')->nullable();
            $table->decimal('purchase_rate_square_feet', 30, 2)->nullable();
            $table->decimal('purchase_price', 30, 2)->nullable();
            $table->string('rate_type')->nullable();
            $table->decimal('rate_square_feet', 30, 2)->nullable();
            $table->decimal('total_amount', 30, 2)->nullable();
            $table->foreignId('created_by')->nullable()->constrained(TableEnum::USERS);
            $table->foreignId('updated_by')->nullable()->constrained(TableEnum::USERS);
            $table->foreignId('deleted_by')->nullable()->constrained(TableEnum::USERS);

            $table->string('sales_status')->default('open');
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
        Schema::dropIfExists(TableEnum::FLATS);
    }
};
