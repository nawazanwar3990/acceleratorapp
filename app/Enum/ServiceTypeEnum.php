<?php

declare(strict_types=1);

namespace App\Enum;

use App\Enum\AbstractEnum;
use App\Models\Service;

class ServiceTypeEnum extends AbstractEnum
{
    public const BASIC_SERVICE = KeyWordEnum::BASIC_SERVICE;
    public const ADDITIONAL_SERVICE = KeyWordEnum::ADDITIONAL_SERVICE;
    public const FREELANCER_SERVICE = KeyWordEnum::FREELANCER_SERVICE;
    public const BUSINESS_ACCELERATOR_SERVICE = 'business_accelerator_service';
    public const MENTOR_SERVICE = 'mentor_service';

    public static function getValues(): array
    {
        return array(
            self::BASIC_SERVICE,
            self::ADDITIONAL_SERVICE,
            self::FREELANCER_SERVICE,
            self::BUSINESS_ACCELERATOR_SERVICE,
            self::MENTOR_SERVICE
        );
    }

    public static function getAdminServices(): array
    {
        return array(
            self::BUSINESS_ACCELERATOR_SERVICE,
            self::FREELANCER_SERVICE,
            self::MENTOR_SERVICE
        );
    }

    public static function getBAServices(): array
    {
        return array(
            self::BASIC_SERVICE,
            self::ADDITIONAL_SERVICE
        );
    }

    public static function getTranslationKeys(): array
    {
        return array(
            self::BASIC_SERVICE => __(sprintf('%s.%s', 'general', self::BASIC_SERVICE)),
            self::ADDITIONAL_SERVICE => __(sprintf('%s.%s', 'general', self::ADDITIONAL_SERVICE)),
            self::FREELANCER_SERVICE => __(sprintf('%s.%s', 'general', self::FREELANCER_SERVICE)),
            self::BUSINESS_ACCELERATOR_SERVICE => __(sprintf('%s.%s', 'general', self::BUSINESS_ACCELERATOR_SERVICE)),
            self::MENTOR_SERVICE => __(sprintf('%s.%s', 'general', self::MENTOR_SERVICE)),

        );
    }

    public static function getServiceType($id = null)
    {
        $data = [
            self::BASIC_SERVICE => __(sprintf('%s.%s', 'general', self::BASIC_SERVICE)),
            self::ADDITIONAL_SERVICE => __(sprintf('%s.%s', 'general', self::ADDITIONAL_SERVICE)),
            self::FREELANCER_SERVICE => __(sprintf('%s.%s', 'general', self::FREELANCER_SERVICE)),
            self::BUSINESS_ACCELERATOR_SERVICE => __(sprintf('%s.%s', 'general', self::BUSINESS_ACCELERATOR_SERVICE)),
            self::MENTOR_SERVICE => __(sprintf('%s.%s', 'general', self::MENTOR_SERVICE)),
        ];
        if (!is_null($id)) {
            $data = $data[$id];
        }

        return $data;
    }

    public static function getDefaultFreelancerServices(): array
    {
        return array(
            [
                'name' => 'IT Services',
                'slug' => 'it-service',
                'type' => ServiceTypeEnum::FREELANCER_SERVICE,
                'status' => true
            ],
            [
                'name' => 'Designing Services',
                'slug' => 'designing-service',
                'type' => ServiceTypeEnum::FREELANCER_SERVICE,
                'status' => true,
            ],
            [
                'name' => 'Manufacturing Services',
                'slug' => 'manufacturing-services',
                'type' => ServiceTypeEnum::FREELANCER_SERVICE,
                'status' => true,
            ],
            [
                'name' => 'Training Services',
                'slug' => 'training-services',
                'type' => ServiceTypeEnum::FREELANCER_SERVICE,
                'status' => true,
            ],
            [
                'name' => 'Electrical & Electronic Services',
                'slug' => 'electrical-and-electronic-services',
                'type' => ServiceTypeEnum::FREELANCER_SERVICE,
                'status' => true,
            ],
            [
                'name' => 'Mason And Labor Class Services',
                'slug' => 'mason-and-labor-class-service',
                'type' => ServiceTypeEnum::FREELANCER_SERVICE,
                'status' => true,
            ],
            [
                'name' => 'Driving Service',
                'slug' => 'driving-service',
                'type' => ServiceTypeEnum::FREELANCER_SERVICE,
                'status' => true,
            ],
            [
                'name' => 'Carpenter Service',
                'slug' => 'carpenter-service',
                'type' => ServiceTypeEnum::FREELANCER_SERVICE,
                'status' => true,
            ],
            [
                'name' => 'Logistic Service',
                'slug' => 'logistic-service',
                'type' => ServiceTypeEnum::FREELANCER_SERVICE,
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
                'type' => ServiceTypeEnum::BUSINESS_ACCELERATOR_SERVICE,
                'status' => true
            ],
            [
                'name' => 'Freelancer',
                'slug' => 'freelancer',
                'type' => ServiceTypeEnum::BUSINESS_ACCELERATOR_SERVICE,
                'status' => true,
            ],
            [
                'name' => 'Meeting Room',
                'slug' => 'meeting-room',
                'type' => ServiceTypeEnum::BUSINESS_ACCELERATOR_SERVICE,
                'status' => true,
            ],
            [
                'name' => 'MentorShip with Investment',
                'slug' => 'mentorship-with-investment',
                'type' => ServiceTypeEnum::BUSINESS_ACCELERATOR_SERVICE,
                'status' => true,
            ],
            [
                'name' => 'Mentorship with out Investment',
                'slug' => 'mentorship-with-out-investment',
                'type' => ServiceTypeEnum::BUSINESS_ACCELERATOR_SERVICE,
                'status' => true,
            ],
            [
                'name' => 'Event Management',
                'slug' => 'event-management',
                'type' => ServiceTypeEnum::BUSINESS_ACCELERATOR_SERVICE,
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
                'type' => ServiceTypeEnum::MENTOR_SERVICE,
                'status' => true
            ],
            [
                'name' => 'Robotics',
                'slug' => 'robotics',
                'type' => ServiceTypeEnum::MENTOR_SERVICE,
                'status' => true
            ],
        );
    }

    public static function getDefaultChildMentorServices(): array
    {
        $it_service = Service::whereType(ServiceTypeEnum::MENTOR_SERVICE)->whereSlug('it')->value('id');
        $robotics_service = Service::whereType(ServiceTypeEnum::MENTOR_SERVICE)->whereSlug('robotics')->value('id');
        return array(
            [
                'name' => 'Web Development',
                'slug' => 'web-development',
                'type' => ServiceTypeEnum::MENTOR_SERVICE,
                'parent_id' => $it_service,
                'status' => true
            ],
            [
                'name' => 'Graphics',
                'slug' => 'graphics',
                'type' => ServiceTypeEnum::MENTOR_SERVICE,
                'parent_id' => $it_service,
                'status' => true,
            ],
            [
                'name' => 'Quality Assurance',
                'slug' => 'quality-assurance',
                'type' => ServiceTypeEnum::MENTOR_SERVICE,
                'parent_id' => $it_service,
                'status' => true,
            ],
            [
                'name' => 'Wordpress',
                'slug' => 'wordpress',
                'type' => ServiceTypeEnum::MENTOR_SERVICE,
                'parent_id' => $it_service,
                'status' => true,
            ],
            [
                'name' => 'Computer Training',
                'slug' => 'computer-training',
                'type' => ServiceTypeEnum::MENTOR_SERVICE,
                'parent_id' => $it_service,
                'status' => true,
            ],
            [
                'name' => 'Help Desk Support',
                'slug' => 'help-desk-support',
                'type' => ServiceTypeEnum::MENTOR_SERVICE,
                'parent_id' => $it_service,
                'status' => true,
            ],
            [
                'name' => 'Cloud Service',
                'slug' => 'cloud-service',
                'type' => ServiceTypeEnum::MENTOR_SERVICE,
                'parent_id' => $it_service,
                'status' => true,
            ],
            [
                'name' => 'Network Security',
                'slug' => 'network-security',
                'type' => ServiceTypeEnum::MENTOR_SERVICE,
                'parent_id' => $it_service,
                'status' => true,
            ],
            [
                'name' => 'Operator Interface',
                'slug' => 'operator-interface',
                'type' => ServiceTypeEnum::MENTOR_SERVICE,
                'parent_id' => $robotics_service,
                'status' => true,
            ],
            [
                'name' => 'Sensing & Perception',
                'slug' => 'sensing-perception',
                'type' => ServiceTypeEnum::MENTOR_SERVICE,
                'parent_id' => $robotics_service,
                'status' => true,
            ],
            [
                'name' => 'Programming',
                'slug' => 'programming',
                'type' => ServiceTypeEnum::MENTOR_SERVICE,
                'parent_id' => $robotics_service,
                'status' => true,
            ],
            [
                'name' => 'Mobility',
                'slug' => 'mobility',
                'type' => ServiceTypeEnum::MENTOR_SERVICE,
                'parent_id' => $robotics_service,
                'status' => true,
            ],
        );
    }
}
