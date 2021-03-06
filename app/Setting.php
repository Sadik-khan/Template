<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Setting extends Model
{

    use LogsActivity;

    protected  $guarded = ['name'];

}
