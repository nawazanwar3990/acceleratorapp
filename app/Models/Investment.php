<?php

namespace App\Models;

use App\Enum\TableEnum;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\Auth;

class Investment extends Model
{
    protected $table = TableEnum::INVESTMENTS;
    protected $fillable = [
        'current_step',
        'startup_name',
        'full_name',
        'email',
        'mobile',
        'are_you_looking_for_funding',
        'how_much_funding_you_want',
        'city',
        'country',
        'startup_stage',
        'no_of_founders',
        'founder_previous_startup',
        'founder_time',
        'founder_past_experience',
        'founder_knows_each_other',
        'how_much_capital',
        'technologies_white_labelled',
        'immediate_hired',
        'business_execution',
        'risk_you_foresee_in_business',
        'team_role',
        'file',
        'product_tech_focused',
        'working_on_your_product',
        'launch_your_startup',
        'generating_revenue',
        'average_month_grow',
        'raised_external_funding',
        'fund_sar',
        'problem_your_startup_solve',
        'current_product_development',
        'business_model',
        'your_revenue_streams',
        'perfect_time_for_this_idea',
        'product_better_the_world',
        'industry_of_start_up',
        'founder_domain',
        'total_addressable_market',
        'three_key_competitors',
        'product_service',
        'product_service_value',
        'suitable_competitive_edge',
        'competitive_how_so',
        'do_you_have_legal_formation',
        'kind_of_incorporation',
        'jurisdiction',
        'equity_splits',
        'founder_involved',
        'hear_about_us',
        'what_made_apply_to_falak',
        'mentor_type',
        'mentors',
        'created_by',
        'updated_by',
        'deleted_by'
    ];

    public function getEquitySplitsAttribute($key)
    {
        return json_decode($key, true);
    }
    public function getMentorsAttribute($key)
    {
        return json_decode($key, true);
    }
}
