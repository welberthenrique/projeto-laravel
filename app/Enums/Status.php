<?php

namespace App\Enum;

enum status: string
{
    case PENDING = 'P';
    case APPROVED = 'A';
    case CANCELED = 'C';
}
