<?php
declare(strict_types=1);

namespace App\Enum\TableHeadings\ServiceManagement;

use App\Enum\AbstractEnum;
use App\Enum\ServiceTypeEnum;
use function __;

class ServiceTableHeading extends AbstractEnum
{
    public const NAME = 'name';
    public const SLUG = 'slug';
    public const PARENT = 'parent';
    public const STATUS = 'status';

    public static function getValues(): array
    {
        return [];
    }

    public static function getTranslationKeys(): array
    {
        $data = [
            self::NAME => __(sprintf('%s.%s', 'general', self::NAME)),
            self::SLUG => __(sprintf('%s.%s', 'general', self::SLUG)),
            self::STATUS => __(sprintf('%s.%s', 'general', self::STATUS)),
        ];
        if (request()->query('type') == ServiceTypeEnum::FREELANCER_SERVICE) {
            $data['parent'] = __(sprintf('%s.%s', 'general', self::PARENT));
        }
        return $data;
    }
}
