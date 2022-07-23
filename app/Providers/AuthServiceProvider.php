<?php

namespace App\Providers;

use App\Enum\AbilityEnum;
use App\Enum\RoleEnum;
use App\Models\BA;
use App\Models\Building;
use App\Models\Customer;
use App\Models\Duration;
use App\Models\Floor;
use App\Models\FloorType;
use App\Models\Freelancer;
use App\Models\Hr;
use App\Models\Investor;
use App\Models\Module;
use App\Models\Office;
use App\Models\OfficeType;
use App\Models\Package;
use App\Models\Payment;
use App\Models\Permission;
use App\Models\Plan;
use App\Models\Plans\InstallmentTerm;
use App\Models\Province;
use App\Models\Role;
use App\Models\Service;
use App\Models\Setting;
use App\Models\Subscription;
use App\Models\User;
use App\Models\Users\Country;
use App\Models\Users\District;
use App\Models\Users\HrDepartment;
use App\Models\Users\HrDesignation;
use App\Models\Users\HrOrganization;
use App\Models\Users\HrProfession;
use App\Models\Users\HrRelation;
use App\Policies\DurationPolicy;
use App\Policies\ModulePolicy;
use App\Policies\PackagePolicy;
use App\Policies\PaymentPolicy;
use App\Policies\PlanPolicy;
use App\Policies\Plans\InstallmentTermPolicy;
use App\Policies\SaleManagement\InstallmentPolicy;
use App\Policies\SaleManagement\SalePolicy;
use App\Policies\ServicePolicy;
use App\Policies\SettingPolicy;
use App\Policies\SubscriptionPolicy;
use App\Policies\Users\AdminPolicy;
use App\Policies\Users\BAPolicy;
use App\Policies\Users\CustomerPolicy;
use App\Policies\Users\FreelancerPolicy;
use App\Policies\Users\InvestorPolicy;
use App\Policies\Users\PermissionPolicy;
use App\Policies\Users\ProvincePolicy;
use App\Policies\Users\RolePolicy;
use App\Policies\Users\UserPolicy;
use App\Policies\Accubator\BuildingPolicy;
use App\Policies\Accubator\FloorPolicy;
use App\Policies\Accubator\FloorTypePolicy;
use App\Policies\Accubator\OfficePolicy;
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
