<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class AdminInformation extends Model
{
    use LogsActivity;

    protected $guarded = [];
}
