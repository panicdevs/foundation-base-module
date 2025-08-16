<?php

declare(strict_types=1);

namespace Foundation\Base\Http\Controllers\V1\BaseApiController;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller;

class BaseApiController extends Controller
{
    use AuthorizesRequests;
    use ValidatesRequests;
}
