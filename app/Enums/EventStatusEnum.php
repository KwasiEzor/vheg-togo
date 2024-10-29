<?php

namespace App\Enums;

enum EventStatusEnum: string
{
    case SCHEDUlED =  'scheduled';
    case CANCELLED =  'cancelled';
    case COMPLETED =  'completed';
}
