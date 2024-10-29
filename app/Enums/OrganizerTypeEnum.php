<?php

namespace App\Enums;

enum OrganizerTypeEnum: string
{
    case PERSON = 'person';
    case ASSOCIATION = 'association';
    case COMPANY = 'company';
}
