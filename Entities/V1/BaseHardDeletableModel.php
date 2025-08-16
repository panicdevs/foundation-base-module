<?php

declare(strict_types=1);

namespace Foundation\Base\Entities\V1;

use Foundation\Support\Traits\V1\HasFieldsEnum\HasFieldsEnum;
use Illuminate\Database\Eloquent\Model;

class BaseHardDeletableModel extends Model
{
    use HasFieldsEnum;
}
