<?php

namespace App\Enums;

enum ParticipantStatusEnum: string
{
    case ACTIVE = 'active';
    case INACTIVE = 'inactive';
    case SANCTIONED = 'sanctioned';
    case BANNED = 'banned';
}
