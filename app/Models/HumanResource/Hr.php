<?php

namespace App\Models\HumanResource;

use App\Models\Authorization\User;
use App\Models\Building;
use App\Models\Definition\General\Colony;
use App\Models\Definition\General\Country;
use App\Models\Definition\General\District;
use App\Models\Definition\General\Province;
use App\Models\Definition\General\Tehsil;
use App\Models\Definition\HumanResource\HrBusiness;
use App\Models\Definition\HumanResource\HrCast;
use App\Models\Definition\HumanResource\HrDepartment;
use App\Models\Definition\HumanResource\HrEmployeeType;
use App\Models\Definition\HumanResource\HrMinistry;
use App\Models\Definition\HumanResource\HrNationality;
use App\Models\Definition\HumanResource\HrOrganization;
use App\Models\Definition\HumanResource\HrProfession;
use App\Models\Definition\HumanResource\HrRelation;
use App\Models\Definition\HumanResource\HrTaxStatus;
use App\Models\Definition\HumanResource\HrTaxType;
use App\Models\Media;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class Hr extends Model
{
    use HasFactory, SoftDeletes;

    protected $dates = [
        'date_of_birth',
        'date_of_death',
        'govt_date_of_joining',
        'govt_date_of_retirement',
        'private_date_of_joining',
        'private_date_of_retirement',
    ];

    protected $fillable = [
        'hr_no',
        'first_name',
        'middle_name',
        'last_name',
        'relation_id',
        'relation_first_name',
        'relation_middle_name',
        'relation_last_name',
        'cnic',
        'passport_number',
        'date_of_birth',
        'cast_id',
        'nationality_id',
        'country_stay_in',
        'gender',
        'marital_status',
        'date_of_death',
        'employee_type_id',
        'employee_sub_type_id',
        'tax_type_id',
        'tax_status_id',
        'tax_no',
        'federal_provincial_id',
        'ministry_id',
        'govt_organization_id',
        'govt_department_id',
        'govt_current_last_served',
        'govt_grade_id',
        'govt_profession_id',
        'govt_serving_retired',
        'govt_date_of_joining',
        'govt_date_of_retirement',
        'private_organization_id',
        'private_department_id',
        'private_current_last_served',
        'private_grade_id',
        'private_profession_id',
        'private_serving_retired',
        'private_date_of_joining',
        'private_date_of_retirement',
        'own_business',
        'owner_partner',
        'own_business_id',
        'own_business_sub_id',
        'cell_1',
        'cell_2',
        'cell_whats_app',
        'landline',
        'email',
        'facebook',
        'note',
        'remarks',
        'sec_contact_full_name',
        'sec_contact_relation',
        'sec_contact',
        'present_country_id',
        'present_province_id',
        'present_district_id',
        'present_tehsil_id',
        'present_colony_id',
        'present_block',
        'present_chak_name',
        'present_chak_no',
        'present_sector',
        'present_street_no',
        'present_house_no',
        'present_postal_code',
        'present_post_office',
        'present_near_by',
        'present_linear_address',
        'permanent_country_id',
        'permanent_province_id',
        'permanent_district_id',
        'permanent_tehsil_id',
        'permanent_colony_id',
        'permanent_block',
        'permanent_chak_name',
        'permanent_chak_no',
        'permanent_sector',
        'permanent_street_no',
        'permanent_house_no',
        'permanent_postal_code',
        'permanent_post_office',
        'permanent_near_by',
        'permanent_linear_address',
        'left_thumb_code',
        'left_index_code',
        'left_middle_code',
        'left_ring_code',
        'left_little_code',
        'right_thumb_code',
        'right_index_code',
        'right_middle_code',
        'right_ring_code',
        'right_little_code',
        'qr_code',
        'rfid',
        'created_by',
        'updated_by',

    ];

    public function user(): HasOne
    {
        return $this->hasOne(User::class, 'hr_id');
    }

    public function relation(): BelongsTo
    {
        return $this->belongsTo(HrRelation::class);
    }

    public function cast(): BelongsTo
    {
        return $this->belongsTo(HrCast::class);
    }

    public function nationality(): BelongsTo
    {
        return $this->belongsTo(HrNationality::class);
    }

    public function countryStayIn(): BelongsTo
    {
        return $this->belongsTo(Country::class, 'country_stay_in');
    }

    public function employeeType(): BelongsTo
    {
        return $this->belongsTo(HrEmployeeType::class, 'employee_type_id');
    }

    public function employeeSubType(): BelongsTo
    {
        return $this->belongsTo(HrEmployeeType::class, 'employee_sub_type_id');
    }

    public function taxType(): BelongsTo
    {
        return $this->belongsTo(HrTaxType::class);
    }

    public function taxStatus(): BelongsTo
    {
        return $this->belongsTo(HrTaxStatus::class);
    }

    public function federalProvincial(): BelongsTo
    {
        return $this->belongsTo(Province::class, 'federal_provincial_id');
    }

    public function ministry(): BelongsTo
    {
        return $this->belongsTo(HrMinistry::class);
    }

    public function govtOrganization(): BelongsTo
    {
        return $this->belongsTo(HrOrganization::class, 'govt_organization_id');
    }

    public function govtDepartment(): BelongsTo
    {
        return $this->belongsTo(HrDepartment::class, 'govt_department_id');
    }

    public function govtProfession(): BelongsTo
    {
        return $this->belongsTo(HrProfession::class, 'govt_profession_id');
    }

    public function privateOrganization(): BelongsTo
    {
        return $this->belongsTo(HrOrganization::class, 'private_organization_id');
    }

    public function privateDepartment(): BelongsTo
    {
        return $this->belongsTo(HrDepartment::class, 'private_department_id');
    }

    public function privateProfession(): BelongsTo
    {
        return $this->belongsTo(HrProfession::class, 'private_profession_id');
    }

    public function ownBusiness(): BelongsTo
    {
        return $this->belongsTo(HrBusiness::class, 'own_business_id');
    }

    public function ownSubBusiness(): BelongsTo
    {
        return $this->belongsTo(HrBusiness::class, 'own_business_sub_id');
    }

    public function secondaryContactRelation(): BelongsTo
    {
        return $this->belongsTo(HrRelation::class, 'sec_contact_relation');
    }

    public function presentCountry(): BelongsTo
    {
        return $this->belongsTo(Country::class, 'present_country_id');
    }

    public function presentProvince(): BelongsTo
    {
        return $this->belongsTo(Province::class, 'present_province_id');
    }

    public function presentDistrict(): BelongsTo
    {
        return $this->belongsTo(District::class, 'present_district_id');
    }

    public function presentTehsil(): BelongsTo
    {
        return $this->belongsTo(Tehsil::class, 'present_tehsil_id');
    }

    public function presentColony(): BelongsTo
    {
        return $this->belongsTo(Colony::class, 'present_colony_id');
    }

    public function permanentCountry(): BelongsTo
    {
        return $this->belongsTo(Country::class, 'permanent_country_id');
    }

    public function permanentProvince(): BelongsTo
    {
        return $this->belongsTo(Province::class, 'permanent_province_id');
    }

    public function permanentDistrict(): BelongsTo
    {
        return $this->belongsTo(District::class, 'permanent_district_id');
    }

    public function permanentTehsil(): BelongsTo
    {
        return $this->belongsTo(Tehsil::class, 'permanent_tehsil_id');
    }

    public function permanentColony(): BelongsTo
    {
        return $this->belongsTo(Colony::class, 'permanent_colony_id');
    }



    public function createdBy(): BelongsTo
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function updatedBy(): BelongsTo
    {
        return $this->belongsTo(User::class, 'updated_by');
    }

    public function deletedBy(): BelongsTo
    {
        return $this->belongsTo(User::class, 'deleted_by');
    }

    public function getFullNameAttribute(): string
    {
        return $this->first_name . ' ' . $this->middle_name . ' ' . $this->last_name;
    }

    public function getRelationFullNameAttribute(): string
    {
        return $this->relation_first_name . ' ' . $this->relation_middle_name . ' ' . $this->relation_last_name;
    }

    public function getHeadName(): string
    {
        return $this->id . '-' . $this->first_name . '-' . $this->middle_name . '-' . $this->last_name;
    }

    public function mediaFirstImage(): BelongsTo
    {
        return $this->belongsTo(Media::class, 'id', 'record_id');
    }

}
