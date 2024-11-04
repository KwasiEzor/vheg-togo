<?php

namespace App\Enums;

enum FundStatusEnum: string
{
    case ONGOING = 'ongoing';
    case PENDING = 'pending';
    case APPROVED = 'approved';
    case REJECTED = 'rejected';

    /**
     * values
     *
     * @return array
     */
    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }
}
