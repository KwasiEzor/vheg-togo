<?php

namespace App\Enums;

enum ProjectStatusEnum: string
{
    case ONGOING = 'ongoing';
    case PENDING = 'pending';
    case CANCELLED = 'cancelled';
}
