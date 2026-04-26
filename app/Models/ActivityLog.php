<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Spatie\Activitylog\Models\Activity;

class ActivityLog extends Activity
{
    use CrudTrait;
}
