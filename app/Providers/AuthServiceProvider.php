<?php

namespace App\Providers;

use App\Enum\AbilityEnum;
use App\Enum\RoleEnum;
use App\Models\Plans\InstallmentTerm;
use App\Models\Plans\Plan;
use App\Models\Services\Service;
use App\Models\Subscriptions\Duration;
use App\Models\Subscriptions\Module;
use App\Models\Subscriptions\Package;
use App\Models\Subscriptions\Payment;
use App\Models\Subscriptions\Subscription;
use App\Models\SystemConfiguration\Setting;
use App\Models\Users\BA;
use App\Models\Users\Country;
use App\Models\Users\Customer;
use App\Models\Users\District;
use App\Models\Users\Freelancer;
use App\Models\Users\Hr;
use App\Models\Users\HrDepartment;
use App\Models\Users\HrDesignation;
use App\Models\Users\HrOrganization;
use App\Models\Users\HrProfession;
use App\Models\Users\HrRelation;
use App\Models\Users\Investor;
use App\Models\Users\Permission;
use App\Models\Users\Province;
use App\Models\Users\Role;
use App\Models\Users\User;
use App\Models\WorkingSpace\Building;
use App\Models\WorkingSpace\Floor;
use App\Models\WorkingSpace\FloorType;
use App\Models\WorkingSpace\Office;
use App\Models\WorkingSpace\OfficeType;
use App\Policies\ModulePolicy;
use App\Policies\Plans\InstallmentTermPolicy;
use App\Policies\Plans\PlanPolicy;
use App\Policies\SaleManagement\InstallmentPolicy;
use App\Policies\SaleManagement\SalePolicy;
use App\Policies\Services\ServicePolicy;
use App\Policies\Subscriptions\DurationPolicy;
use App\Policies\Subscriptions\PackagePolicy;
use App\Policies\Subscriptions\PaymentPolicy;
use App\Policies\Subscriptions\SubscriptionPolicy;
use App\Policies\SystemConfiguration\SettingPolicy;
use App\Policies\Users\AdminPolicy;
use App\Policies\Users\BAPolicy;
use App\Policies\Users\CountryPolicy;
use App\Policies\Users\CustomerPolicy;
use App\Policies\Users\DepartmentPolicy;
use App\Policies\Users\DesignationPolicy;
use App\Policies\Users\DistrictPolicy;
use App\Policies\Users\FreelancerPolicy;
use App\Policies\Users\InvestorPolicy;
use App\Policies\Users\OrganizationPolicy;
use App\Policies\Users\PermissionPolicy;
use App\Policies\Users\ProfessionPolicy;
use App\Policies\Users\ProvincePolicy;
use App\Policies\Users\RelationPolicy;
use App\Policies\Users\RolePolicy;
use App\Policies\Users\UserPolicy;
use App\Policies\WorkingSpace\BuildingPolicy;
use App\Policies\WorkingSpace\FloorPolicy;
use App\Policies\WorkingSpace\FloorTypePolicy;
use App\Policies\WorkingSpace\OfficePolicy;
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

        Floor::class => FloorPolicy::class,
        FloorType::class => FloorTypePolicy::class,
        OfficeType::class => PlanPolicy::class,



        Province::class => ProvincePolicy::class,

        Office::class => OfficePolicy::class,

        Hr::class => AdminPolicy::class,
        Customer::class => CustomerPolicy::class,
        BA::class => BAPolicy::class,

        Payment::class => PaymentPolicy::class,

        Subscription::class => SubscriptionPolicy::class,

        Setting::class => SettingPolicy::class,
        Duration::class => DurationPolicy::class,
        Module::class => ModulePolicy ::class,
        Package::class => PackagePolicy::class,

        Building::class => BuildingPolicy::class,
        Plan::class => PlanPolicy::class,
        Freelancer::class => FreelancerPolicy::class,
        Investor::class => InvestorPolicy::class,
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
