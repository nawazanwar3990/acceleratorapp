<?php

declare(strict_types=1);

namespace App\Enum;

use App\Enum\AbstractEnum;
use App\Models\Service;

class ServiceTypeEnum extends AbstractEnum
{
    public const BUSINESS_ACCELERATOR = 'business_accelerator';
    public const BUSINESS_ACCELERATOR_INDIVIDUAL = 'business_accelerator_individual';
    public const FREELANCER = 'freelancer';
    public const SERVICE_PROVIDER_COMPANY = 'service_provider_company';
    public const MENTOR = 'mentor';
    public const BASIC = 'basic';
    public const ADDITIONAL = 'additional';

    public static function getValues(): array
    {
        return array(
            self::BUSINESS_ACCELERATOR,
            self::BUSINESS_ACCELERATOR_INDIVIDUAL,
            self::FREELANCER,
            self::SERVICE_PROVIDER_COMPANY,
            self::MENTOR,
            self::BASIC,
            self::ADDITIONAL
        );
    }

    public static function getAdminServices(): array
    {
        return array(
            self::BUSINESS_ACCELERATOR,
            self::BUSINESS_ACCELERATOR_INDIVIDUAL,
            self::FREELANCER,
            self::SERVICE_PROVIDER_COMPANY,
            self::MENTOR
        );
    }

    public static function getBAServices(): array
    {
        return array(
            self::BASIC,
            self::ADDITIONAL
        );
    }

    public static function getTranslationKeys(): array
    {
        return array(
            self::BUSINESS_ACCELERATOR => 'BA Company',
            self::BUSINESS_ACCELERATOR_INDIVIDUAL => 'BA Individual',
            self::FREELANCER => 'Freelancer',
            self::SERVICE_PROVIDER_COMPANY => 'Service Provider Company',
            self::MENTOR =>'Mentor',
            self::BASIC =>'Basic',
            self::ADDITIONAL =>'Additional'
        );
    }

    public static function getDefaultFreelancerServices(): array
    {
        return array(
            [
                'name' => 'IT Services',
                'slug' => 'it-service',
                'type' => ServiceTypeEnum::FREELANCER,
                'status' => true
            ],
            [
                'name' => 'Designing Services',
                'slug' => 'designing-service',
                'type' => ServiceTypeEnum::FREELANCER,
                'status' => true,
            ],
            [
                'name' => 'Manufacturing Services',
                'slug' => 'manufacturing-services',
                'type' => ServiceTypeEnum::FREELANCER,
                'status' => true,
            ],
            [
                'name' => 'Training Services',
                'slug' => 'training-services',
                'type' => ServiceTypeEnum::FREELANCER,
                'status' => true,
            ],
            [
                'name' => 'Electrical & Electronic Services',
                'slug' => 'electrical-and-electronic-services',
                'type' => ServiceTypeEnum::FREELANCER,
                'status' => true,
            ],
            [
                'name' => 'Mason And Labor Class Services',
                'slug' => 'mason-and-labor-class-service',
                'type' => ServiceTypeEnum::FREELANCER,
                'status' => true,
            ],
            [
                'name' => 'Driving Service',
                'slug' => 'driving-service',
                'type' => ServiceTypeEnum::FREELANCER,
                'status' => true,
            ],
            [
                'name' => 'Carpenter Service',
                'slug' => 'carpenter-service',
                'type' => ServiceTypeEnum::FREELANCER,
                'status' => true,
            ],
            [
                'name' => 'Logistic Service',
                'slug' => 'logistic-service',
                'type' => ServiceTypeEnum::FREELANCER,
                'status' => true,
            ],
        );
    }
    public static function getDefaultServiceProviderServices(): array
    {
        return array(
            [
                'name' => 'IT Services',
                'slug' => 'it-service',
                'type' => ServiceTypeEnum::SERVICE_PROVIDER_COMPANY,
                'status' => true
            ],
            [
                'name' => 'Designing Services',
                'slug' => 'designing-service',
                'type' => ServiceTypeEnum::SERVICE_PROVIDER_COMPANY,
                'status' => true,
            ],
            [
                'name' => 'Manufacturing Services',
                'slug' => 'manufacturing-services',
                'type' => ServiceTypeEnum::SERVICE_PROVIDER_COMPANY,
                'status' => true,
            ],
            [
                'name' => 'Training Services',
                'slug' => 'training-services',
                'type' => ServiceTypeEnum::SERVICE_PROVIDER_COMPANY,
                'status' => true,
            ],
            [
                'name' => 'Electrical & Electronic Services',
                'slug' => 'electrical-and-electronic-services',
                'type' => ServiceTypeEnum::SERVICE_PROVIDER_COMPANY,
                'status' => true,
            ],
            [
                'name' => 'Mason And Labor Class Services',
                'slug' => 'mason-and-labor-class-service',
                'type' => ServiceTypeEnum::SERVICE_PROVIDER_COMPANY,
                'status' => true,
            ],
            [
                'name' => 'Driving Service',
                'slug' => 'driving-service',
                'type' => ServiceTypeEnum::SERVICE_PROVIDER_COMPANY,
                'status' => true,
            ],
            [
                'name' => 'Carpenter Service',
                'slug' => 'carpenter-service',
                'type' => ServiceTypeEnum::SERVICE_PROVIDER_COMPANY,
                'status' => true,
            ],
            [
                'name' => 'Logistic Service',
                'slug' => 'logistic-service',
                'type' => ServiceTypeEnum::SERVICE_PROVIDER_COMPANY,
                'status' => true,
            ],
        );
    }
    public static function getDefaultBAServices(): array
    {
        return array(
            [
                'name' => 'Incubator',
                'slug' => 'incubator',
                'type' => ServiceTypeEnum::BUSINESS_ACCELERATOR,
                'status' => true
            ],
            [
                'name' => 'Freelancer',
                'slug' => 'freelancer',
                'type' => ServiceTypeEnum::BUSINESS_ACCELERATOR,
                'status' => true,
            ],
            [
                'name' => 'Meeting Room',
                'slug' => 'meeting-room',
                'type' => ServiceTypeEnum::BUSINESS_ACCELERATOR,
                'status' => true,
            ],
            [
                'name' => 'Mentorship with Investment',
                'slug' => 'mentorship-with-investment',
                'type' => ServiceTypeEnum::BUSINESS_ACCELERATOR,
                'status' => true,
            ],
            [
                'name' => 'Mentorship with out Investment',
                'slug' => 'mentorship-with-out-investment',
                'type' => ServiceTypeEnum::BUSINESS_ACCELERATOR,
                'status' => true,
            ],
            [
                'name' => 'Event Management',
                'slug' => 'event-management',
                'type' => ServiceTypeEnum::BUSINESS_ACCELERATOR,
                'status' => true,
            ]
        );
    }
    public static function getDefaultBAIndividual(): array
    {
        return array(
            [
                'name' => 'Incubator',
                'slug' => 'incubator',
                'type' => ServiceTypeEnum::BUSINESS_ACCELERATOR_INDIVIDUAL,
                'status' => true
            ],
            [
                'name' => 'Freelancer',
                'slug' => 'freelancer',
                'type' => ServiceTypeEnum::BUSINESS_ACCELERATOR_INDIVIDUAL,
                'status' => true,
            ],
            [
                'name' => 'Meeting Room',
                'slug' => 'meeting-room',
                'type' => ServiceTypeEnum::BUSINESS_ACCELERATOR_INDIVIDUAL,
                'status' => true,
            ],
            [
                'name' => 'Mentorship with Investment',
                'slug' => 'mentorship-with-investment',
                'type' => ServiceTypeEnum::BUSINESS_ACCELERATOR_INDIVIDUAL,
                'status' => true,
            ],
            [
                'name' => 'Mentorship with out Investment',
                'slug' => 'mentorship-with-out-investment',
                'type' => ServiceTypeEnum::BUSINESS_ACCELERATOR_INDIVIDUAL,
                'status' => true,
            ],
            [
                'name' => 'Event Management',
                'slug' => 'event-management',
                'type' => ServiceTypeEnum::BUSINESS_ACCELERATOR_INDIVIDUAL,
                'status' => true,
            ]
        );
    }
    public static function getDefaultParentMentorServices(): array
    {
        return array(
            [
                'name' => 'IT',
                'slug' => 'it',
                'type' => ServiceTypeEnum::MENTOR,
                'status' => true
            ],
            [
                'name' => 'Robotics',
                'slug' => 'robotics',
                'type' => ServiceTypeEnum::MENTOR,
                'status' => true
            ],
        );
    }
    public static function getDefaultChildMentorServices(): array
    {
        $it_service = Service::whereType(ServiceTypeEnum::MENTOR)->whereSlug('it')->value('id');
        $robotics_service = Service::whereType(ServiceTypeEnum::MENTOR)->whereSlug('robotics')->value('id');
        return array(
            [
                'name' => 'Web Development',
                'slug' => 'web-development',
                'type' => ServiceTypeEnum::MENTOR,
                'parent_id' => $it_service,
                'status' => true
            ],
            [
                'name' => 'Graphics',
                'slug' => 'graphics',
                'type' => ServiceTypeEnum::MENTOR,
                'parent_id' => $it_service,
                'status' => true,
            ],
            [
                'name' => 'Quality Assurance',
                'slug' => 'quality-assurance',
                'type' => ServiceTypeEnum::MENTOR,
                'parent_id' => $it_service,
                'status' => true,
            ],
            [
                'name' => 'Wordpress',
                'slug' => 'wordpress',
                'type' => ServiceTypeEnum::MENTOR,
                'parent_id' => $it_service,
                'status' => true,
            ],
            [
                'name' => 'Computer Training',
                'slug' => 'computer-training',
                'type' => ServiceTypeEnum::MENTOR,
                'parent_id' => $it_service,
                'status' => true,
            ],
            [
                'name' => 'Help Desk Support',
                'slug' => 'help-desk-support',
                'type' => ServiceTypeEnum::MENTOR,
                'parent_id' => $it_service,
                'status' => true,
            ],
            [
                'name' => 'Cloud Service',
                'slug' => 'cloud-service',
                'type' => ServiceTypeEnum::MENTOR,
                'parent_id' => $it_service,
                'status' => true,
            ],
            [
                'name' => 'Network Security',
                'slug' => 'network-security',
                'type' => ServiceTypeEnum::MENTOR,
                'parent_id' => $it_service,
                'status' => true,
            ],
            [
                'name' => 'Operator Interface',
                'slug' => 'operator-interface',
                'type' => ServiceTypeEnum::MENTOR,
                'parent_id' => $robotics_service,
                'status' => true,
            ],
            [
                'name' => 'Sensing & Perception',
                'slug' => 'sensing-perception',
                'type' => ServiceTypeEnum::MENTOR,
                'parent_id' => $robotics_service,
                'status' => true,
            ],
            [
                'name' => 'Programming',
                'slug' => 'programming',
                'type' => ServiceTypeEnum::MENTOR,
                'parent_id' => $robotics_service,
                'status' => true,
            ],
            [
                'name' => 'Mobility',
                'slug' => 'mobility',
                'type' => ServiceTypeEnum::MENTOR,
                'parent_id' => $robotics_service,
                'status' => true,
            ],
        );
    }
}
