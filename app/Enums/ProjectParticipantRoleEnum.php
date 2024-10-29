<?php

namespace App\Enums;

enum ProjectParticipantRoleEnum: string
{
    case PARTICIPANT = 'participant';
    case MANAGER = 'manager';
    case SUPERVISOR = 'supervisor';
    case CONTRIBUTOR = 'contributor';
    case SPONSOR = 'sponsor';
}
