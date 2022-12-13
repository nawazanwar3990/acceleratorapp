<?php

use App\Enum\TableEnum;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create(TableEnum::INVESTMENTS, function (Blueprint $table) {

            $table->id();
            $table->string('current_step')->nullable();

            /*Welcome*/
            $table->string('startup_name')->nullable();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('email')->nullable();
            $table->string('mobile')->nullable();
            $table->string('city')->nullable();
            $table->string('country')->nullable();
            $table->string('startup_stage')->nullable();
            /*Team*/
            $table->string('no_of_founders')->nullable();
            $table->longText('founder_previous_startup')->nullable();
            $table->longText('founder_time')->nullable();
            $table->longText('founder_past_experience')->nullable();
            $table->longText('founder_knows_each_other')->nullable();
            $table->longText('how_much_capital')->nullable();
            $table->longText('technologies_white_labelled')->nullable();
            $table->longText('immediate_hired')->nullable();
            $table->string('business_execution')->nullable();
            $table->longText('risk_you_foresee_in_business')->nullable();
            $table->string('team_role')->nullable();
            $table->string('file')->nullable();
            /*Products*/
            $table->string('product_tech_focused')->nullable();
            $table->string('working_on_your_product')->nullable();
            $table->string('launch_your_startup')->nullable();
            $table->string('generating_revenue')->nullable();
            $table->longText('average_month_grow')->nullable();
            $table->string('raised_external_funding')->nullable();
            $table->text('fund_sar')->nullable();
            $table->longText('problem_your_startup_solve')->nullable();
            $table->longText('current_product_development')->nullable();
            $table->longText('business_model')->nullable();
            $table->longText('your_revenue_streams')->nullable();
            $table->longText('perfect_time_for_this_idea')->nullable();
            $table->longText('product_better_the_world')->nullable();
            /*Market*/
            $table->string('industry_of_start_up')->nullable();
            $table->string('founder_domain')->nullable();
            $table->string('total_addressable_market')->nullable();
            $table->longText('three_key_competitors')->nullable();
            $table->string('product_service')->nullable();
            $table->string('product_service_value')->nullable();
            $table->string('suitable_competitive_edge')->nullable();
            $table->string('competitive_how_so')->nullable();

            /*Equity*/

            $table->string('do_you_have_legal_formation')->nullable();
            $table->string('kind_of_incorporation')->nullable();
            $table->string('jurisdiction')->nullable();
            $table->json('equity_splits')->nullable();
            $table->string('founder_involved')->nullable();

            /*Curiosity*/

            $table->string('hear_about_us')->nullable();
            $table->string('what_made_apply_to_falak')->nullable();

            $table->string('mentor_type')->nullable();
            $table->json('mentors')->nullable();

            $table->foreignId('created_by')->nullable()->constrained(TableEnum::USERS);
            $table->foreignId('updated_by')->nullable()->constrained(TableEnum::USERS);
            $table->foreignId('deleted_by')->nullable()->constrained(TableEnum::USERS);

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists(TableEnum::INVESTMENTS);
    }
};
