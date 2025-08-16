<?php

declare(strict_types=1);

namespace Foundation\Base\Http\Controllers\V1\BaseController;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller;

class BaseController extends Controller
{
    use AuthorizesRequests;
    use ValidatesRequests;
}
