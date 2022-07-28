<?php

use App\Enum\TableEnum;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create(TableEnum::FREELANCERS, function (Blueprint $table) {

            $table->id();
            $table->foreignId('user_id')->nullable()->constrained(TableEnum::USERS);
            $table->string('type')->nullable();
            $table->string('sp_name')->nullable();
            $table->enum('is_register_sp', ['yes', 'no'])->default('no');
            $table->json('sp_institutes')->nullable();
            $table->string('sp_no_of_emp')->nullable();
            $table->string('sp_date_of_initiation')->nullable();
            $table->longText('sp_address')->nullable();
            $table->string('sp_contact_no')->nullable();
            $table->string('sp_email')->nullable();
            $table->json('other_services')->nullable();
            $table->timestamps();

        });
    }

    public function down()
    {
        Schema::dropIfExists(TableEnum::FREELANCERS);
    }
};
