<?php

namespace App\Enums;

enum CrudListIcon: string
{
    case Default = 'la la-table';
    case Users = 'la la-users';
    case Roles = 'la la-user-shield';
    case Permissions = 'la la-key';
}
