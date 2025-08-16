<?php

declare(strict_types=1);

namespace Foundation\Base\Entities\V1;

use Foundation\Support\Traits\V1\HasFieldsEnum\HasFieldsEnum;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class BaseAuthenticatableModel extends Authenticatable
{
    use HasFieldsEnum;
    use Notifiable;
    use SoftDeletes;
}
