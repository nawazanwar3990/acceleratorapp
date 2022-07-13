<?php

namespace App\Providers;

use App\Enum\AbilityEnum;
use App\Enum\RoleEnum;
use App\Models\PackageManagement\Duration;
use App\Models\PackageManagement\Module;
use App\Models\PackageManagement\Package;
use App\Models\PackageManagement\Subscription;
use App\Models\PaymentManagement\Payment;
use App\Models\PlanManagement\Plan;
use App\Models\PlanManagement\InstallmentTerm;
use App\Models\SaleManagement\Installment;
use App\Models\SaleManagement\Sale;
use App\Models\WorkingSpace\Building;
use App\Models\WorkingSpace\Office;
use App\Models\WorkingSpace\OfficeType;
use App\Models\WorkingSpace\Floor;
use App\Models\WorkingSpace\FloorType;
use App\Models\ServiceManagement\Service;
use App\Models\SystemConfiguration\Setting;
use App\Models\UserManagement\Country;
use App\Models\UserManagement\District;
use App\Models\UserManagement\Hr;
use App\Models\UserManagement\HrDepartment;
use App\Models\UserManagement\HrDesignation;
use App\Models\UserManagement\HrOrganization;
use App\Models\UserManagement\HrProfession;
use App\Models\UserManagement\HrRelation;
use App\Models\UserManagement\Permission;
use App\Models\UserManagement\Province;
use App\Models\UserManagement\Role;
use App\Models\UserManagement\User;
use App\Policies\FlatManagement\FlatPolicy;
use App\Policies\FreelancerManagement\FreelancerPolicy;
use App\Policies\ModulePolicy;
use App\Policies\PackageManagement\DurationPolicy;
use App\Policies\PackageManagement\PackagePolicy;
use App\Policies\PackageManagement\SubscriptionPolicy;
use App\Policies\PaymentManagement\PaymentPolicy;
use App\Policies\PlanManagement\PlanPolicy;
use App\Policies\PlanManagement\InstallmentTermPolicy;
use App\Policies\SaleManagement\InstallmentPolicy;
use App\Policies\SaleManagement\SalePolicy;
use App\Policies\ServiceManagement\ServicePolicy;
use App\Policies\SystemConfiguration\SettingPolicy;
use App\Policies\UserManagement\CountryPolicy;
use App\Policies\UserManagement\DepartmentPolicy;
use App\Policies\UserManagement\DesignationPolicy;
use App\Policies\UserManagement\DistrictPolicy;
use App\Policies\UserManagement\AdminPolicy;
use App\Policies\UserManagement\OrganizationPolicy;
use App\Policies\UserManagement\PermissionPolicy;
use App\Policies\UserManagement\ProfessionPolicy;
use App\Policies\UserManagement\ProvincePolicy;
use App\Policies\UserManagement\RelationPolicy;
use App\Policies\UserManagement\RolePolicy;
use App\Policies\UserManagement\UserPolicy;
use App\Policies\WorkingSpace\BuildingPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [

        User::class => UserPolicy::class,
        Role::class => RolePolicy::class,
        Permission::class => PermissionPolicy::class,
        Service::class => ServicePolicy::class,

        Floor::class => SalePolicy::class,
        FloorType::class => InstallmentPolicy::class,
        OfficeType::class => PlanPolicy::class,


        HrRelation::class => RelationPolicy::class,
        Country::class => CountryPolicy::class,
        Province::class => ProvincePolicy::class,
        District::class => DistrictPolicy::class,

        HrDepartment::class => DepartmentPolicy::class,
        HrDesignation::class => DesignationPolicy::class,
        HrProfession::class => ProfessionPolicy::class,
        HrOrganization::class => OrganizationPolicy::class,
        Office::class => FlatPolicy::class,

        Hr::class => AdminPolicy::class,
        Hr::class => FreelancerPolicy::class,

        Payment::class => PaymentPolicy::class,

        Subscription::class => SubscriptionPolicy::class,

        Setting::class => SettingPolicy::class,
        Duration::class => DurationPolicy::class,
        Module::class => ModulePolicy ::class,
        Package::class => PackagePolicy::class,

        Building::class => BuildingPolicy::class,

        Plan::class => PlanPolicy::class,
        InstallmentTerm::class => InstallmentTermPolicy::class,

        Sale::class => SalePolicy::class,
        Installment::class => InstallmentPolicy::class,
    ];

    public function boot()
    {
        $this->registerPolicies();
        //Used only For View
        Gate::define('hasModuleAccess', function ($user, $module) {
            $permission = AbilityEnum::VIEW . "_" . $module;
            return RoleEnum::check_permission($user, $permission);
        });
        // Used for Any permission
        Gate::define('hasAccess', function ($user, $permission) {
            return RoleEnum::check_permission($user, $permission);
        });
    }
}
