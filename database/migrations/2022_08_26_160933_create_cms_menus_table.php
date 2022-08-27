<?php

use App\Enum\TableEnum;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create(TableEnum::CMS_MENUS, function (Blueprint $table) {
            $table->id();
            $table->string('name', 255)->nullable();
            $table->string('icon', 255)->nullable();
            $table->string('route', 255)->nullable();
            $table->integer('parent_id')->nullable();
            $table->integer('order')->nullable();
            $table->boolean('active')->default(false);
            $table->enum('type',['header','footer'])->default('header');
            $table->foreignId('created_by')->nullable()->constrained(TableEnum::USERS);
            $table->foreignId('updated_by')->nullable()->constrained(TableEnum::USERS);
            $table->foreignId('deleted_by')->nullable()->constrained(TableEnum::USERS);
            $table->timestamps();
            $table->softDeletes();
        });
    }
    public function down()
    {
        Schema::dropIfExists(TableEnum::CMS_MENUS);
    }
};
