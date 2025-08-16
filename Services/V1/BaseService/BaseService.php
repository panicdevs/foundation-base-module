<?php

declare(strict_types=1);

namespace Foundation\Base\Services\V1\BaseService;

use Foundation\Base\Contracts\V1\Services\BaseServiceInterface;

abstract class BaseService implements BaseServiceInterface
{
    /**
     * Service Version
     */
    protected static string $VERSION = '1.0';

    /**
     * Resolve an instance of the service
     *
     * @noinspection PhpMethodParametersCountMismatchInspection
     */
    public static function resolve(...$args): static
    {
        return new static(...$args);
    }
}
