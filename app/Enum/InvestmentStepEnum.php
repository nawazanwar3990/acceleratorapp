<?php

declare(strict_types=1);

namespace App\Enum;

class InvestmentStepEnum extends AbstractEnum
{
    public const MENTOR = 'mentor';
    public const BASIC = 'basic';
    public const TEAM = 'team';
    public const PRODUCT = 'product';
    public const MARKET = 'market';
    public const EQUITY = 'equity';
    public const CURIOSITY = 'curiosity';

    public static function getValues(): array
    {
        return array(
            self::MENTOR,
            self::BASIC,
            self::TEAM,
            self::PRODUCT,
            self::MARKET,
            self::EQUITY,
            self::CURIOSITY,
        );
    }

    public static function getTranslationKeys(): array
    {
        return array(
            self::MENTOR => 'Mentor',
            self::BASIC => 'Basic Info',
            self::TEAM => 'Team',
            self::PRODUCT => 'Product',
            self::MARKET => 'Market',
            self::EQUITY => 'Equity',
            self::CURIOSITY => 'Curiosity',
        );
    }
}
