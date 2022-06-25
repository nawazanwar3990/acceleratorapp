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
        Schema::create(TableEnum::DEVICES, function (Blueprint $table) {
            $table->id();


            $table->foreignId('device_type_id')->nullable()->constrained(TableEnum::DEVICE_TYPES);
            $table->foreignId('device_class_id')->nullable()->constrained(TableEnum::DEVICE_CLASSES);
            $table->foreignId('device_location_id')->nullable()->constrained(TableEnum::DEVICE_LOCATIONS);
            $table->foreignId('device_make_id')->nullable()->constrained(TableEnum::DEVICE_MAKES);
            $table->foreignId('device_model_id')->nullable()->constrained(TableEnum::DEVICE_MODELS);
            $table->foreignId('device_operating_system_id')->nullable()->constrained(TableEnum::DEVICE_OPERATING_SYSTEMS);

            $table->string('device_name')->nullable();
            $table->string('device_ip_address')->nullable();
            $table->string('device_username')->nullable();
            $table->string('device_password')->nullable();
            $table->string('device_connection_string')->nullable();
            $table->string('device_generation')->nullable();
            $table->string('device_mac_address')->nullable();
            $table->string('device_serial_number')->nullable();
            $table->string('device_admin_login')->nullable();
            $table->string('device_admin_password')->nullable();
            $table->string('device_lot_number')->nullable();
            $table->string('device_lot_date')->nullable();
            $table->string('device_other_info')->nullable();

            $table->foreignId('created_by')->nullable()->constrained(TableEnum::USERS);
            $table->foreignId('updated_by')->nullable()->constrained(TableEnum::USERS);
            $table->foreignId('deleted_by')->nullable()->constrained(TableEnum::USERS);
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
        Schema::dropIfExists(TableEnum::DEVICES);
    }
};
