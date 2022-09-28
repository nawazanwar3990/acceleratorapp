<?php

namespace App\Enum;

class TableEnum extends AbstractEnum
{
    public const USERS = 'users';
    public const PASSWORD_RESETS = 'password_resets';
    public const SERVICES = 'services';
    public const MEDIA = 'media';
    public const FLOOR_TYPES = 'floor_types';
    public const HRS = 'hrs';
    public const FLOORS = 'floors';

    public const OFFICE_TYPES = 'office_types';
    public const OFFICES = 'offices';
    public const OFFICE_OWNER = 'office_owner';

    public const PLANS = 'plans';
    public const SETTINGS = 'settings';
    public const ROLES = 'roles';
    public const PERMISSIONS = 'permissions';
    public const ROLE_USER = 'role_user';
    public const ROLE_PERMISSION = 'role_permission';
    public const MODULES = 'modules';
    public const EVENTS = 'events';
    public const PACKAGES = 'packages';
    public const PACKAGE_MODULE = 'package_module';
    public const DURATIONS = 'durations';
    public const SUBSCRIPTIONS = 'subscriptions';
    public const PAYMENTS = 'payments';
    public const SUBSCRIPTION_LOGS = 'subscription_logs';
    public const BUILDINGS = 'buildings';
    public const BUILDING_OWNER = 'building_owner';
    public const HR_EDUCATION = 'hr_education';
    public const HR_JOB = 'hr_job';
    public const HR_SERVICE = 'hr_service';
    public const PLAN_SERVICE = 'plan_service';

    public const FLOOR_OWNER = 'floor_owner';
    public const OFFICE_PLAN = 'office_plan';

    public const PACKAGE_SERVICE = 'package_service';

    public const BA = 'ba';
    public const BA_SERVICE = 'ba_service';

    public const VERIFY_USERS = 'verify_users';
    public const BA_QUALIFICATION = 'ba_qualification';
    public const BA_CERTIFICATION = 'ba_certification';
    public const BA_EXPERIENCE = 'ba_experience';

    public const FREELANCERS = 'freelancers';
    public const CUSTOMERS = 'customers';
    public const MENTORS = 'mentors';

    public const FREELANCER_EXPERIENCE = 'freelancer_experience';
    public const FREELANCER_QUALIFICATION = 'freelancer_qualification';
    public const FREELANCER_SERVICE = 'freelancer_service';

    public const FREELANCER_FOCAL_PERSON = 'freelancer_focal_person';
    public const FREELANCER_CERTIFICATION = 'freelancer_certification';
    public const MENTOR_SERVICE = 'mentor_service';

    public const MENTOR_CERTIFICATION = 'mentor_certification';
    public const MENTOR_QUALIFICATION = 'mentor_qualification';
    public const MENTOR_PROJECT = 'mentor_project';

    public const EVENT_TYPES = 'event_types';
    public const MEETINGS = 'meetings';
    public const NOTIFICATIONS = 'notifications';
    public const MEETING_TYPES = 'meeting_types';

    public const PAYMENT_RECEIPTS = 'payment_receipts';

    public const CMS_CONTACT_US = 'contact_us';
    public const CMS_MENUS = 'cms_menus';
    public const  CMS_PAGES = 'cms_pages';
    public const CMS_SECTIONS = 'cms_sections';
    public const CMS_LAYOUTS = 'cms_layouts';
    public const CMS_FAQ_TOPICS = 'cms_faq_topics';
    public const CMS_FAQ_TOPIC_SECTIONS = 'cms_faq_topic_sections';
    public const BLOGS = 'blogs';
    public const SLIDERS = 'sliders';
    public const DESCRIPTIVE = 'descriptive';
    public const WHAT_WE_OFFERS = 'what_we_offers';
    public const HOW_IT_WORKS = 'how_it_works';

    public static function getValues(): array
    {
        return [];
    }

    public static function getTranslationKeys(): array
    {
        return [];
    }
}
