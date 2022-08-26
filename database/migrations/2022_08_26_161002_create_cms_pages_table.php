<?php

use App\Enum\TableEnum;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create(TableEnum::CMS_PAGES, function (Blueprint $table) {
            $table->id();
            $table->foreignId('menu_id')->nullable();
            $table->longText('page_title')->nullable();
            $table->longText('page_description')->nullable();
            $table->longText('page_keyword')->nullable();
            $table->longText('extra_css')->nullable();
            $table->longText('extra_js')->nullable();
            $table->boolean('active')->default(true);
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists(TableEnum::CMS_PAGES);
    }
};
