<?php

declare(strict_types=1);

namespace App\Enum;

class InvestmentStepEnum extends AbstractEnum
{
    public const WELCOME = 'welcome';
    public const TEAM = 'team';
    public const PRODUCT = 'product';
    public const MARKET = 'market';
    public const EQUITY = 'equity';
    public const CURIOSITY = 'curiosity';
    public const MENTOR = 'mentor';

    public static function getValues(): array
    {
        return array(
            self::WELCOME,
            self::TEAM,
            self::PRODUCT,
            self::MARKET,
            self::EQUITY,
            self::CURIOSITY,
            self::MENTOR
        );
    }

    public static function getTranslationKeys(): array
    {
        return array(
            self::WELCOME => 'Welcome',
            self::TEAM => 'Team',
            self::PRODUCT => 'Product',
            self::MARKET => 'Market',
            self::EQUITY => 'Equity',
            self::CURIOSITY => 'Curiosity',
            self::MENTOR => 'Mentor'
        );
    }
}
