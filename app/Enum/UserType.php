<?php

namespace App\Enum;

enum UserType: string
{
    case ADMIN = 'admin';
    case COMPANY = 'company';
    case WORKER = 'worker';

    public function label(): string
    {
        return match ($this) {
            self::ADMIN => 'Admin',
            self::COMPANY => 'Company',
            self::WORKER => 'Worker',
        };
    }
}
