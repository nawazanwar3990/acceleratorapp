<?php

namespace App\Providers;

use App\Enum\AbilityEnum;
use App\Enum\RoleEnum;
use App\Models\Accounts\Expense;
use App\Models\Accounts\ExpenseHead;
use App\Models\Accounts\Salary;
use App\Models\Authorization\Permission;
use App\Models\Authorization\Role;
use App\Models\Authorization\User;
use App\Models\Building;
use App\Models\Definition\FloorName;
use App\Models\Definition\FloorType;
use App\Models\Definition\General\Colony;
use App\Models\Definition\General\CommodityType;
use App\Models\Definition\General\Country;
use App\Models\Definition\General\District;
use App\Models\Definition\General\FlatType;
use App\Models\Definition\General\Province;
use App\Models\Definition\General\Tehsil;
use App\Models\Definition\HumanResource\HrBusiness;
use App\Models\Definition\HumanResource\HrCast;
use App\Models\Definition\HumanResource\HrDepartment;
use App\Models\Definition\HumanResource\HrDesignation;
use App\Models\Definition\HumanResource\HrEmployeeType;
use App\Models\Definition\HumanResource\HrMinistry;
use App\Models\Definition\HumanResource\HrNationality;
use App\Models\Definition\HumanResource\HrOrganization;
use App\Models\Definition\HumanResource\HrProfession;
use App\Models\Definition\HumanResource\HrRelation;
use App\Models\Definition\HumanResource\HrTaxStatus;
use App\Models\Definition\HumanResource\HrTaxType;
use App\Models\Definition\Service;
use App\Models\Devices\Device;
use App\Models\Devices\DeviceClass;
use App\Models\Devices\DeviceLocation;
use App\Models\Devices\DeviceMake;
use App\Models\Devices\DeviceModel;
use App\Models\Devices\DeviceOperatingSystem;
use App\Models\Devices\DeviceType;
use App\Models\FixedAssets\AssetsInventory;
use App\Models\FixedAssets\AssetsLocation;
use App\Models\FixedAssets\AssetsUnit;
use App\Models\Flat;
use App\Models\Floor;
use App\Models\FrontDesk\Complain;
use App\Models\FrontDesk\FrontDeskSetup\CallType;
use App\Models\FrontDesk\FrontDeskSetup\ComplainType;
use App\Models\FrontDesk\FrontDeskSetup\Purpose;
use App\Models\FrontDesk\FrontDeskSetup\Reference;
use App\Models\FrontDesk\FrontDeskSetup\Source;
use App\Models\FrontDesk\PhoneCallLog;
use App\Models\FrontDesk\PostalDispatch;
use App\Models\FrontDesk\PostalReceive;
use App\Models\FrontDesk\SaleEnquiry;
use App\Models\FrontDesk\VisitorBook;
use App\Models\HumanResource\Employee;
use App\Models\HumanResource\Hr;
use App\Models\HumanResource\Nominee;
use App\Models\Sales\InstallmentPlan;
use App\Models\Sales\InstallmentTerm;
use App\Models\Sales\Sale;
use App\Models\Settings\SystemSetting;
use App\Policies\AssetsInventoryPolicy;
use App\Policies\AssetsLocationPolicy;
use App\Policies\AssetsUnitPolicy;
use App\Policies\Authorization\PermissionPolicy;
use App\Policies\Authorization\RolePolicy;
use App\Policies\Authorization\UserPolicy;
use App\Policies\BuildingPolicy;
use App\Policies\BusinessPolicy;
use App\Policies\CallTypePolicy;
use App\Policies\ColonyPolicy;
use App\Policies\CommodityTypesPolicy;
use App\Policies\ComplainPolicy;
use App\Policies\ComplainTypePolicy;
use App\Policies\CountryPolicy;
use App\Policies\DepartmentPolicy;
use App\Policies\DesignationPolicy;
use App\Policies\DeviceClassPolicy;
use App\Policies\DeviceLocationPolicy;
use App\Policies\DeviceMakePolicy;
use App\Policies\DeviceModelPolicy;
use App\Policies\DeviceOperatingSystemPolicy;
use App\Policies\DevicePolicy;
use App\Policies\DeviceTypePolicy;
use App\Policies\DistrictPolicy;
use App\Policies\EmployeesPolicy;
use App\Policies\EmployeeTypePolicy;
use App\Policies\ExpenseHeadsPolicy;
use App\Policies\ExpensesPolicy;
use App\Policies\FlatShopsPolicy;
use App\Policies\FlatTypesPolicy;
use App\Policies\FloorNamesPolicy;
use App\Policies\FloorsPolicy;
use App\Policies\FloorTypesPolicy;
use App\Policies\HrCastPolicy;
use App\Policies\HrPersonPolicy;
use App\Policies\InstallmentPlansPolicy;
use App\Policies\InstallmentTermPolicy;
use App\Policies\MinistryPolicy;
use App\Policies\NationalityPolicy;
use App\Policies\NomineeRegistrationPolicy;
use App\Policies\OrganizationPolicy;
use App\Policies\PhoneCallLogPolicy;
use App\Policies\PostalDispatchPolicy;
use App\Policies\PostalReceivePolicy;
use App\Policies\ProfessionPolicy;
use App\Policies\ProvincePolicy;
use App\Policies\PurposePolicy;
use App\Policies\ReferencePolicy;
use App\Policies\RelationPolicy;
use App\Policies\SalaryPolicy;
use App\Policies\SalesEnquiryPolicy;
use App\Policies\ServicesPolicy;
use App\Policies\SourcePolicy;
use App\Policies\SystemSettingsPolicy;
use App\Policies\TaxStatusPolicy;
use App\Policies\TaxTypePolicy;
use App\Policies\TehsilPolicy;
use App\Policies\TitleTransferPolicy;
use App\Policies\VisitorBookPolicy;
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
        /*Definitions*/
        Service::class => ServicesPolicy::class,
        FloorName::class => FloorNamesPolicy::class,
        FloorType::class => FloorTypesPolicy::class,
        FlatType::class => FlatTypesPolicy::class,
        CommodityType::class => CommodityTypesPolicy::class,
        HrRelation::class => RelationPolicy::class,
        HrCast::class => HrCastPolicy::class,
        HrEmployeeType::class => EmployeeTypePolicy::class,
        HrTaxType::class => TaxTypePolicy::class,
        HrTaxStatus::class => TaxStatusPolicy::class,
        Country::class => CountryPolicy::class,
        Province::class => ProvincePolicy::class,
        District::class => DistrictPolicy::class,
        Tehsil::class => TehsilPolicy::class,
        Colony::class => ColonyPolicy::class,
        HrDepartment::class => DepartmentPolicy::class,
        HrDesignation::class => DesignationPolicy::class,
        HrNationality::class => NationalityPolicy::class,
        HrMinistry::class => MinistryPolicy::class,
        HrProfession::class => ProfessionPolicy::class,
        HrOrganization::class => OrganizationPolicy::class,
        HrBusiness::class => BusinessPolicy::class,
        /*Device Definitions*/
        DeviceType::class => DeviceTypePolicy::class,
        DeviceModel::class => DeviceModelPolicy::class,
        DeviceMake::class => DeviceMakePolicy::class,
        DeviceLocation::class => DeviceLocationPolicy::class,
        DeviceOperatingSystem::class => DeviceOperatingSystemPolicy::class,
        DeviceClass::class => DeviceClassPolicy::class,
        /*All Provider*/
        Device::class => DevicePolicy::class,
        Building::class => BuildingPolicy::class,
        Floor::class => FloorsPolicy::class,
        Flat::class => FlatShopsPolicy::class,
        Hr::class => HrPersonPolicy::class,
        Employee::class => EmployeesPolicy::class,
        Nominee::class => NomineeRegistrationPolicy::class,
        /*Front Desk*/
        CallType::class => CallTypePolicy::class,
        ComplainType::class => ComplainTypePolicy::class,
        Source::class => SourcePolicy::class,
        Reference::class => ReferencePolicy::class,
        Purpose::class => PurposePolicy::class,
        SaleEnquiry::class => SalesEnquiryPolicy::class,
        VisitorBook::class => VisitorBookPolicy::class,
        PhoneCallLog::class => PhoneCallLogPolicy::class,
        PostalDispatch::class => PostalDispatchPolicy::class,
        PostalReceive::class => PostalReceivePolicy::class,
        Complain::class => ComplainPolicy::class,
        /*Fixed Assets*/
        AssetsInventory::class => AssetsInventoryPolicy::class,
        AssetsLocation::class => AssetsLocationPolicy::class,
        AssetsUnit::class => AssetsUnitPolicy::class,
        /*sales and rent*/
        Sale::class => TitleTransferPolicy::class,
        InstallmentPlan::class => InstallmentPlansPolicy::class,
        InstallmentTerm::class => InstallmentTermPolicy::class,
        /*income and expense*/
        ExpenseHead::class => ExpenseHeadsPolicy::class,
        Expense::class => ExpensesPolicy::class,

        /*Accounts*/
        Salary::class => SalaryPolicy::class,
        /*settings*/
        SystemSetting::class => SystemSettingsPolicy::class,

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
