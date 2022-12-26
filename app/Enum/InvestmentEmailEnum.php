<?php

declare(strict_types=1);

namespace App\Enum;


class InvestmentEmailEnum extends AbstractEnum
{
    public const SAVE_LATER = 'save_later';
    public const NEW_PITCH = 'new_pitch';

    public const ACCEPT_INVESTMENT = 'accept_investment';
    public const REJECT_INVESTMENT = 'reject_investment';


    public static function getValues(): array
    {
        return [
            self::SAVE_LATER,
            self::NEW_PITCH,
            self::ACCEPT_INVESTMENT,
            self::REJECT_INVESTMENT
        ];
    }

    public static function getTranslationKeys(): array
    {
        return [
            self::SAVE_LATER => [
                'subject' => 'Save Later',
                'description' => 'Please Click the Link below for Save the Form'
            ],
            self::NEW_PITCH => [
                'subject' => 'New Pitch',
                'description' => 'You have received a new pitch, kindly visit this link to view.'
            ],
            self::ACCEPT_INVESTMENT => [
                'subject' => 'Accept Investment',
                'description' => 'Congratulation! Your pitch has been shortlisted. You will soon receive a call from us.'
            ],
            self::REJECT_INVESTMENT => [
                'subject' => 'Reject Investment',
                'description' => 'We regret to inform you that your pitch cannot be shortlisted this time.Kindly see the comments below'
            ],
        ];
    }
}
